<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->references('id')->on('users')->nullable();
            $table->string('layout')->nullable();
            $table->string('theme')->default('theme-blue');
            $table->string('primary_color')->default('#0D6EFD');
            $table->string('secondary_color')->default('#FFD55C');
            $table->string('site_background')->default('#e9e6e1');
            $table->string('card_background')->default('#ffffff');
            $table->string('card_border')->default('#ffffff');
            $table->string('chart_color_1')->default('#191A1C');
            $table->string('chart_color_2')->default('#837788');
            $table->string('chart_color_3')->default('#374765');
            $table->string('chart_color_4')->default('#484261');
            $table->string('chart_color_5')->default('#717788');
            $table->string('layout_mode')->default('light');
            $table->enum('rtl_mode', ['Y','N'])->default('N');
            $table->string('font')->default('font-nunito');
            $table->enum('horizontal_menu', ['Y','N'])->default('N');
            $table->enum('page_header_fix', ['Y','N'])->default('Y');
            $table->enum('page_header_dark_mode', ['Y','N'])->default('N');
            $table->enum('border_radius_none', ['Y','N'])->default('N');
            $table->enum('sidebar_mode_dark', ['Y','N'])->default('N');
            $table->enum('sidebar_bg_image', ['Y','N'])->default('N');
            $table->string('sidebar_bg_image_path')->default('https://alui.thememakker.com/html/assets/images/sidebar-bg/sidebar-1.jpg');
            $table->enum('container_fluid', ['Y','N'])->default('Y');
            $table->enum('card_box_shadow', ['Y','N'])->default('N');
            $table->enum('fullscreen_menu', ['Y','N'])->default('N');
            $table->enum('sidebar_mini', ['Y','N'])->default('N');
            $table->enum('wrapper_top_dark_version', ['Y','N'])->default('N');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
