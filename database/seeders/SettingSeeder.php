<?php

namespace Database\Seeders;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();
        Settings::create([
           'user_id' => null,
           'layout' => 'layout-1',
           'theme' => 'theme-blue',
           'primary_color' => '#0D6EFD', 
           'secondary_color' => '#FFD55C', 
           'site_background' => '#e9e6e1', 
           'card_background' => '#ffffff', 
           'card_border' => '#ffffff', 
           'chart_color_1' => '#191A1C', 
           'chart_color_2' => '#837788', 
           'chart_color_3' => '#374765', 
           'chart_color_4' => '#484261', 
           'chart_color_5' => '#717788', 
           'layout_mode' => 'light',
           'rtl_mode'=> 'N',
           'font' => 'font-nunito',
           'horizontal_menu' => 'N',
           'page_header_fix' => 'Y',
           'page_header_dark_mode'=> 'N',
           'border_radius_none'=> 'N',
           'sidebar_mode_dark'=> 'N',
           'sidebar_bg_image'=> 'N',
           'sidebar_bg_image_path' => 'https://alui.thememakker.com/html/assets/images/sidebar-bg/sidebar-1.jpg',
           'container_fluid' => 'Y',
           'card_box_shadow'=> 'N',
           'fullscreen_menu'=> 'N',
           'sidebar_mini'=>'N',
           'wrapper_top_dark_version'=> 'N'
        ]);
    }
}
