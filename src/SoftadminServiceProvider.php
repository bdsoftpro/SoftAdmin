<?php

namespace SBD\Softadmin;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use SBD\Softadmin\Facades\Softadmin as SoftadminFacade;
use SBD\Softadmin\Http\Middleware\SoftadminAdminMiddleware;
use SBD\Softadmin\Models\Menu;
use SBD\Softadmin\Models\User;

class SoftadminServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(\Intervention\Image\ImageServiceProvider::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('Menu', Menu::class);
        $loader->alias('Softadmin', SoftadminFacade::class);

        $this->app->singleton('softadmin', function () {
            return Softadmin::getInstance();
        });

        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();
            $this->registerConsoleCommands();
        } else {
            $this->registerAppCommands();
        }
    }

    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router)
    {
        if (config('softadmin.user.add_default_role_on_register')) {
            $app_user = config('softadmin.user.namespace');
            $app_user::created(function ($user) {
                if (is_null($user->role_id)) {
                    User::findOrFail($user->id)->setRole(config('softadmin.user.default_role'))
                        ->save();
                }
            });
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'softadmin');

        $router->middleware('admin.user', SoftadminAdminMiddleware::class);
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $basePath = dirname(__DIR__);
        $publishable = [
            'voyager_assets' => [
                "$basePath/publishable/assets" => public_path('vendor/sbd/softadmin/assets'),
            ],
            'migrations' => [
                "$basePath/publishable/database/migrations/" => database_path('migrations'),
            ],
            'seeds' => [
                "$basePath/publishable/database/seeds/" => database_path('seeds'),
            ],
            'demo_content' => [
                "$basePath/publishable/demo_content/" => storage_path('app/public'),
            ],
            'config' => [
                "$basePath/publishable/config/softadmin.php" => config_path('softadmin.php'),
            ],
            'views' => [
                "$basePath/publishable/views/" => resource_path('views/vendor/softadmin'),
            ],
        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
        $this->commands(Commands\ControllersCommand::class);
        $this->commands(Commands\AdminCommand::class);
    }

    /**
     * Register the commands accessible from the App.
     */
    private function registerAppCommands()
    {
        $this->commands(Commands\MakeModelCommand::class);
    }
}
