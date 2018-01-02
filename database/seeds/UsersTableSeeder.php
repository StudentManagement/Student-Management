<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

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
                'name'           => 'Admin',
                'reg_no'         => 'admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            $role = Role::where('name', 'student')->firstOrFail();

            User::create([
                'name'           => 'Student',
                'reg_no'         => 'student',
                'email'          => 'student@student.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            $role = Role::where('name', 'teacher')->firstOrFail();

            User::create([
                'name'           => 'Teacher',
                'reg_no'         => 'teacher',
                'email'          => 'teacher@teacher.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            $role = Role::where('name', 'marker')->firstOrFail();

            User::create([
                'name'           => 'Marker',
                'reg_no'         => 'marker',
                'email'          => 'marker@marker.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
