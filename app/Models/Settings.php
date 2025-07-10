<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'layout',
        'theme',
        'primary_color',
        'secondary_color',
        'site_background',
        'card_background',
        'card_border',
        'chart_color_1',
        'chart_color_2',
        'chart_color_3',
        'chart_color_4',
        'chart_color_5',
        'layout_mode',
        'rtl_mode',
        'font',
        'horizontal_menu',
        'page_header_fix',
        'page_header_dark_mode',
        'border_radius_none',
        'sidebar_mode_dark',
        'sidebar_bg_image',
        'sidebar_bg_image_path',
        'container_fluid',
        'card_box_shadow',
        'fullscreen_menu',
        'sidebar_mini',
        'wrapper_top_dark_version',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
