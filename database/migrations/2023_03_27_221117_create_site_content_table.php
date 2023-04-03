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
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();

            $table->foreignId("site_id")->constrained("sites")->cascadeOnDelete();
            $table->foreignId("slogan_id")->constrained("slogans")->cascadeOnDelete();
            $table->foreignId("tag_line_id")->constrained("tag_lines")->cascadeOnDelete();
            $table->foreignId("about_us_title_id")->constrained("about_us_titles")->cascadeOnDelete();
            $table->foreignId("about_us_description_id")->constrained("about_us_descriptions")->cascadeOnDelete();
            $table->foreignId("shop_title_id")->constrained("shop_titles")->cascadeOnDelete();
            $table->foreignId("button_name_id")->constrained("button_names")->cascadeOnDelete();
            $table->foreignId("popular_title_id")->constrained("popular_titles")->cascadeOnDelete();
            $table->foreignId("contact_title_id")->constrained("contact_titles")->cascadeOnDelete();
            $table->foreignId("contact_content_id")->constrained("contact_contents")->cascadeOnDelete();

            $table->foreignId("created_by")->constrained("users")->cascadeOnDelete();
            $table->foreignId("updated_by")->constrained("users")->cascadeOnDelete();



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
        Schema::dropIfExists('site_contents');
    }
};
