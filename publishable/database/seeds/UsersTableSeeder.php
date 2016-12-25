<?php

use Illuminate\Database\Seeder;
use SBD\Softadmin\Models\Role;
use SBD\Softadmin\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Software Bangladesh',
                'email'          => 'delwar0cse@gmail.com',
                'password'       => bcrypt('123sf456'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
