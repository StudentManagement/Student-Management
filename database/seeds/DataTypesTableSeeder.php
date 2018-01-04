<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'results');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'results',
                'display_name_singular' => 'Result',
                'display_name_plural'   => 'Results',
                'icon'                  => 'voyager-pie-chart',
                'model_name'            => 'App\\Result',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'al-batches');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'al_batches',
                'display_name_singular' => 'Al Batch',
                'display_name_plural'   => 'Al Batches',
                'icon'                  => 'voyager-study',
                'model_name'            => 'App\\AlBatch',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        $dataType = $this->dataType('slug', 'exams');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'exams',
                'display_name_singular' => 'Exam',
                'display_name_plural'   => 'Exams',
                'icon'                  => 'voyager-pie-chart',
                'model_name'            => 'App\\Exam',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        $dataType = $this->dataType('slug', 'institutes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'institutes',
                'display_name_singular' => 'Institute',
                'display_name_plural'   => 'Institutes',
                'icon'                  => 'voyager-lighthouse',
                'model_name'            => 'App\\Institute',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => 'User',
                'display_name_plural'   => 'Users',
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }


        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural'   => 'Menus',
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural'   => 'Roles',
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'summaries');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'summaries',
                'display_name_singular' => 'Summary',
                'display_name_plural'   => 'Summaries',
                'icon'                  => 'voyager-bar-chart',
                'model_name'            => 'App\\Summary',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
