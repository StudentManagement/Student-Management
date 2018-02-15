<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('front.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Front Title',
                'value'        => 'Maths4U',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.intro_text');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Intro text',
                'value'        => 'The only way to learn mathematics is to do mathematics',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.intro_author');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Intro text author',
                'value'        => 'Paul Halmos',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.background');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Intro background image',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 4,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('admin.bg_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Background Image',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 5,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Title',
                'value'        => 'Maths4U',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Description',
                'value'        => 'Student Management',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.loader');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Loader',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.icon_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Icon Image',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 4,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.google_analytics_client_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('about.teachers_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Teacher\'s name',
                'value'        => 'Chandana Dahanayaka',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'About',
            ])->save();
        }

        $setting = $this->findSetting('about.teachers_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Teacher\'s image',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'About',
            ])->save();
        }
        $setting = $this->findSetting('about.teachers_description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Teacher\'s description',
                'value'        => 'Started our A/L classes in 2008 with 6 students. And today we have widen our strength to all over Southern Province',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'About',
            ])->save();
        }

        $setting = $this->findSetting('class-1.name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Class name',
                'value'        => 'Thigma',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.location');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Location',
                'value'        => 'Galle',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b1_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 name',
                'value'        => '2018 Revision',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b1_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 date',
                'value'        => '13th September',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b1_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 time',
                'value'        => '08.00 a.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 5,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b2_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 name',
                'value'        => '2018 Theory',
                'details'      => '',
                'type'         => 'text',
                'order'        => 6,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b2_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 date',
                'value'        => 'Saturday',
                'details'      => '',
                'type'         => 'text',
                'order'        => 7,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b2_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 time',
                'value'        => '1 p.m. - 5 p.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 8,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b3_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 name',
                'value'        => '2019 Theory',
                'details'      => '',
                'type'         => 'text',
                'order'        => 9,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b3_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 date',
                'value'        => 'Saturday',
                'details'      => '',
                'type'         => 'text',
                'order'        => 10,
                'group'        => 'Class_1',
            ])->save();
        }
        $setting = $this->findSetting('class-1.b3_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 time',
                'value'        => '08.00 a.m. - 12.00 p.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 11,
                'group'        => 'Class_1',
            ])->save();
        }

        $setting = $this->findSetting('class-2.name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Class name',
                'value'        => 'Gurukula',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.location');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Location',
                'value'        => 'Matara',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b1_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 name',
                'value'        => '2018 Revision',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b1_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 date',
                'value'        => '11th September',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b1_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 time',
                'value'        => '08.00 a.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 5,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b2_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 name',
                'value'        => '2018 Theory',
                'details'      => '',
                'type'         => 'text',
                'order'        => 6,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b2_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 date',
                'value'        => 'Sunday',
                'details'      => '',
                'type'         => 'text',
                'order'        => 7,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b2_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 time',
                'value'        => '1 p.m. - 5 p.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 8,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b3_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 name',
                'value'        => '2019 Theory',
                'details'      => '',
                'type'         => 'text',
                'order'        => 9,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b3_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 date',
                'value'        => 'Sunday',
                'details'      => '',
                'type'         => 'text',
                'order'        => 10,
                'group'        => 'Class_2',
            ])->save();
        }
        $setting = $this->findSetting('class-2.b3_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 time',
                'value'        => '08.00 a.m. - 12.00 p.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 11,
                'group'        => 'Class_2',
            ])->save();
        }

        $setting = $this->findSetting('class-3.name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Class name',
                'value'        => 'Mahargha',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.location');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Location',
                'value'        => 'Thangalle',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b1_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 name',
                'value'        => '2018 Revision',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b1_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 date',
                'value'        => '12th September',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b1_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 1 time',
                'value'        => '08.00 a.m.',
                'details'      => '',
                'type'         => 'text',
                'order'        => 5,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b2_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 name',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 6,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b2_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 date',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 7,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b2_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 2 time',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 8,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b3_name');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 name',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 9,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b3_date');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 date',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 10,
                'group'        => 'Class_3',
            ])->save();
        }
        $setting = $this->findSetting('class-3.b3_time');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Batch 3 time',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 11,
                'group'        => 'Class_3',
            ])->save();
        }

        $setting = $this->findSetting('contact.message');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Message',
                'value'        => 'Feel free to contact us any time you need',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Contact',
            ])->save();
        }

        



    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
