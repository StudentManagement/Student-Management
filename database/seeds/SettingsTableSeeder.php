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
                'value'        => 'Student Management',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Front Description',
                'value'        => 'Next step in A/L education',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.logo');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Front Logo',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('front.google_analytics_tracking_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Google Analytics Tracking ID',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Front',
            ])->save();
        }

        $setting = $this->findSetting('admin.bg_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Admin Background Image',
                'value'        => 'settings/January2018/tZtn37mEtZCkviSlUSpV.JPG',
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
                'value'        => 'settings/January2018/3wQMR5kYBgA4GNN4Tb0g.jpg',
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
                'value'        => 'settings/January2018/L5UdD1ukJRzYISOvVt2u.png',
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
