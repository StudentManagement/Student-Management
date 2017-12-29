<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Administrator',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Normal User',
                ])->save();
        }
        $role = Role::firstOrNew(['name' => 'marker']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Marker',
                ])->save();
        }
        $role = Role::firstOrNew(['name' => 'teacher']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Teacher',
                ])->save();
        }
    }
}
