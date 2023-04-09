<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_color_fonts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_id')->constrained();

            $table->string("font_family");
            $table->string("primary_color");
            $table->string("primary_text_color");
            $table->string("secondary_color");
            $table->string("secondary_text_color");
            $table->string("top_bar_bg_color");
            $table->string("top_bar_text_color");
            $table->string("header_bg_color");
            $table->string("header_text_color");
            $table->string("header_icon_color");
            $table->string("banner_overlay_color");
            $table->string("banner_text_color");
            $table->string("button_bg_color");
            $table->string("button_text_color");
            $table->string("button_hover_bg_color");
            $table->String("button_hover_text_color");
            $table->string("footer_bg_color");
            $table->string("footer_text_color");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_color_fonts');
    }
};
