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
        Schema::create('site_templates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_id')->constrained();
            $table->foreignId("header_template_id")->constrained();
            $table->foreignId("hero_section_id")->constrained();
            $table->foreignId("product_section_id")->constrained();
            $table->foreignId("related_product_section_id")->constrained();
            $table->foreignId("popular_product_section_id")->constrained();
            $table->foreignId("about_section_id")->constrained();
            $table->foreignId("contact_section_id")->constrained();
            $table->foreignId("cta_section_id")->constrained();
            $table->foreignId("feature_section_id")->constrained();
            $table->foreignId("footer_template_id")->constrained();
            $table->foreignId("loading_gif_id")->constrained();
            $table->foreignId("product_page_id")->constrained();
            $table->foreignId("checkout_page_id")->constrained();

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
        Schema::dropIfExists('site_templates');
    }
};
