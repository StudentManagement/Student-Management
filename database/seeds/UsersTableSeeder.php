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
            $admin = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $admin->id,
            ]);

            $user = Role::where('name', 'user')->firstOrFail();

            User::create([
                'name'           => 'Student',
                'email'          => 'student@student.com',
                'password'       => bcrypt('abc123'),
                'remember_token' => str_random(60),
                'role_id'        => $user->id,
            ]);
            $marker = Role::where('name', 'marker')->firstOrFail();

            User::create([
                'name'           => 'Marker',
                'email'          => 'marker@marker.com',
                'password'       => bcrypt('abc123'),
                'remember_token' => str_random(60),
                'role_id'        => $marker->id,
            ]);

            $teacher = Role::where('name', 'teacher')->firstOrFail();

            User::create([
                'name'           => 'Teacher',
                'email'          => 'teacher@teacher.com',
                'password'       => bcrypt('abc123'),
                'remember_token' => str_random(60),
                'role_id'        => $teacher->id,
            ]);
        }
    }
}
