<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Auth;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $setting = Settings::where('user_id', $user->id)->first();
        if(empty($setting)){
            $setting =  Settings::where('id', 1)->first();
        }
        
        if(Settings::where('user_id', '=', $user->id)->count() > 0) {
            Settings::find($setting->id)->update([ 
                'user_id' => $user->id,
                'layout' => isset($request->layout) ? $request->layout :$setting->layout,
                'theme' => isset($request->theme) ? $request->theme :$setting->theme,
                'primary_color' => isset($request->primary_color) ? $request->primary_color :$setting->primary_color,
                'secondary_color' => isset($request->secondary_color) ? $request->secondary_color :$setting->secondary_color,
                'site_background' => isset($request->site_background) ? $request->site_background :$setting->site_background,
                'card_background' => isset($request->card_background) ? $request->card_background :$setting->card_background,
                'card_border' => isset($request->card_border) ? $request->card_border :$setting->card_border,
                'chart_color_1' => isset($request->chart_color_1) ? $request->chart_color_1 :$setting->chart_color_1,
                'chart_color_2' => isset($request->chart_color_2) ? $request->chart_color_2 :$setting->chart_color_2,
                'chart_color_3' => isset($request->chart_color_3) ? $request->chart_color_3 :$setting->chart_color_3,
                'chart_color_4' => isset($request->chart_color_4) ? $request->chart_color_4 :$setting->chart_color_4,
                'chart_color_5' => isset($request->chart_color_5) ? $request->chart_color_5 :$setting->chart_color_5,
                'layout_mode' => isset($request->layout_mode) ? $request->layout_mode :$setting->layout_mode,
                'rtl_mode' => isset($request->rtl_mode) ? $request->rtl_mode :$setting->rtl_mode,
                'font' => isset($request->font) ? $request->font :$setting->font,
                'horizontal_menu' => isset($request->horizontal_menu) ? $request->horizontal_menu :$setting->horizontal_menu,
                'page_header_fix' => isset($request->page_header_fix) ? $request->page_header_fix :$setting->page_header_fix,
                'page_header_dark_mode' => isset($request->page_header_dark_mode) ? $request->page_header_dark_mode :$setting->page_header_dark_mode,
                'border_radius_none' => isset($request->border_radius_none) ? $request->border_radius_none :$setting->border_radius_none,
                'sidebar_mode_dark' => isset($request->sidebar_mode_dark) ? $request->sidebar_mode_dark :$setting->sidebar_mode_dark,
                'sidebar_bg_image' => isset($request->sidebar_bg_image) ? $request->sidebar_bg_image :$setting->sidebar_bg_image,
                'sidebar_bg_image_path' => isset($request->sidebar_bg_image_path) ? $request->sidebar_bg_image_path :$setting->sidebar_bg_image_path,
                'container_fluid' => isset($request->container_fluid) ? $request->container_fluid :$setting->container_fluid,
                'card_box_shadow' => isset($request->card_box_shadow) ? $request->card_box_shadow :$setting->card_box_shadow,
                'fullscreen_menu' => isset($request->fullscreen_menu) ? $request->fullscreen_menu :$setting->fullscreen_menu,
                'sidebar_mini' => isset($request->sidebar_mini) ? $request->sidebar_mini :$setting->sidebar_mini,
                'wrapper_top_dark_version' => isset($request->wrapper_top_dark_version) ? $request->wrapper_top_dark_version :$setting->wrapper_top_dark_version
            ]);
        }else{
            Settings::create(
            [
                'user_id' => $user->id,
                'layout' => isset($request->layout) ? $request->layout :$setting->layout,
                'theme' => isset($request->theme) ? $request->theme : $setting->theme,
                'primary_color' => isset($request->primary_color) ? $request->primary_color :$setting->primary_color,
                'secondary_color' => isset($request->secondary_color) ? $request->secondary_color :$setting->secondary_color,
                'site_background' => isset($request->site_background) ? $request->site_background :$setting->site_background,
                'card_background' => isset($request->card_background) ? $request->card_background :$setting->card_background,
                'card_border' => isset($request->card_border) ? $request->card_border :$setting->card_border,
                'chart_color_1' => isset($request->chart_color_1) ? $request->chart_color_1 :$setting->chart_color_1,
                'chart_color_2' => isset($request->chart_color_2) ? $request->chart_color_2 :$setting->chart_color_2,
                'chart_color_3' => isset($request->chart_color_3) ? $request->chart_color_3 :$setting->chart_color_3,
                'chart_color_4' => isset($request->chart_color_4) ? $request->chart_color_4 :$setting->chart_color_4,
                'chart_color_5' => isset($request->chart_color_5) ? $request->chart_color_5 :$setting->chart_color_5,
                'layout_mode' => isset($request->layout_mode) ? $request->layout_mode :$setting->layout_mode,
                'rtl_mode' => isset($request->rtl_mode) ? $request->rtl_mode :$setting->rtl_mode,
                'font' => isset($request->font) ? $request->font :$setting->font,
                'horizontal_menu' => isset($request->horizontal_menu) ? $request->horizontal_menu :$setting->horizontal_menu,
                'page_header_fix' => isset($request->page_header_fix) ? $request->page_header_fix :$setting->page_header_fix,
                'page_header_dark_mode' => isset($request->page_header_dark_mode) ? $request->page_header_dark_mode :$setting->page_header_dark_mode,
                'border_radius_none' => isset($request->border_radius_none) ? $request->border_radius_none :$setting->border_radius_none,
                'sidebar_mode_dark' => isset($request->sidebar_mode_dark) ? $request->sidebar_mode_dark :$setting->sidebar_mode_dark,
                'sidebar_bg_image' => isset($request->sidebar_bg_image) ? $request->sidebar_bg_image :$setting->sidebar_bg_image,
                'sidebar_bg_image_path' => isset($request->sidebar_bg_image_path) ? $request->sidebar_bg_image_path :$setting->sidebar_bg_image_path,
                'container_fluid' => isset($request->container_fluid) ? $request->container_fluid :$setting->container_fluid,
                'card_box_shadow' => isset($request->card_box_shadow) ? $request->card_box_shadow :$setting->card_box_shadow,
                'fullscreen_menu' => isset($request->fullscreen_menu) ? $request->fullscreen_menu :$setting->fullscreen_menu,
                'sidebar_mini' => isset($request->sidebar_mini) ? $request->sidebar_mini :$setting->sidebar_mini,
                'wrapper_top_dark_version' => isset($request->wrapper_top_dark_version) ? $request->wrapper_top_dark_version :$setting->wrapper_top_dark_version
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
