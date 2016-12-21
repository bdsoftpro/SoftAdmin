<?php

namespace SBD\Softadmin\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageServiceProviderLaravel5;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Process\Process;
use SBD\Softadmin\Traits\Seedable;
use SBD\Softadmin\SoftadminServiceProvider;

class InstallCommand extends Command
{
    use Seedable;

    protected $seedersPath = __DIR__.'/../../publishable/database/seeds/';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'softadmin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Softadmin Admin package';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function getOptions()
    {
        return [
            ['with-dummy', null, InputOption::VALUE_NONE, 'Install with dummy data', null],
        ];
    }

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    protected function findComposer()
    {
        if (file_exists(getcwd().'/composer.phar')) {
            return '"'.PHP_BINARY.'" '.getcwd().'/composer.phar';
        }

        return 'composer';
    }

    /**
     * Execute the console command.
     *
     * @param \Illuminate\Filesystem\Filesystem $filesystem
     *
     * @return void
     */
    public function fire(\Illuminate\Filesystem\Filesystem $filesystem)
    {
        $this->info('Publishing the Softadmin assets, database, and config files');
        $this->call('vendor:publish', ['--provider' => SoftadminServiceProvider::class]);
        $this->call('vendor:publish', ['--provider' => ImageServiceProviderLaravel5::class]);

        $this->info('Migrating the database tables into your application');
        $this->call('migrate');

        $this->info('Dumping the autoloaded files and reloading all new files');

        $composer = $this->findComposer();

        $process = new Process($composer.' dump-autoload');
        $process->setWorkingDirectory(base_path())->run();

        $this->info('Adding Softadmin routes to routes/web.php');
        $filesystem->put(base_path('routes/web.php'),
            "\n\nRoute::group(['prefix' => 'admin'], function () {\n    Softadmin::backendroutes();\n});\n\n\nRoute::group(['prefix' => ''], function () {\n    Softadmin::frontendroutes();\n});\n");

        $this->info('Seeding data into the database');
        $this->seed('SoftadminDatabaseSeeder');

        if ($this->option('with-dummy')) {
            $this->seed('SoftadminDummyDatabaseSeeder');
        }

        $this->info('Adding the storage symlink to your public folder');
        $this->call('storage:link');

        $this->info('Successfully installed Softadmin! Enjoy');
    }
}
