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
        Schema::table('site_templates', function (Blueprint $table) {
            
            $table->unsignedBigInteger("hero_section_id")->nullable()->change();
            $table->string("hero_section_bg_image")->nullable()->after("hero_section_id");

            $table->unsignedBigInteger("product_section_id")->nullable()->change();
            $table->string("product_section_bg_image")->nullable()->after("product_section_id");

            $table->unsignedBigInteger("related_product_section_id")->nullable()->change();
            $table->unsignedBigInteger("popular_product_section_id")->nullable()->change();
            
            $table->unsignedBigInteger("about_section_id")->nullable()->change();
            $table->string("about_section_bg_image")->nullable()->after("about_section_id");

            $table->unsignedBigInteger("contact_section_id")->nullable()->change();
            $table->string("contact_section_bg_image")->nullable()->after("contact_section_id");

            $table->unsignedBigInteger("cta_section_id")->nullable()->change();
            $table->string("cta_section_bg_image")->nullable()->after("cta_section_id");

            $table->unsignedBigInteger("feature_section_id")->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_templates', function (Blueprint $table) {
            

            $table->dropColumn("hero_section_bg_image");
            $table->dropColumn("product_section_bg_image");
            $table->dropColumn("about_section_bg_image");
            $table->dropColumn("contact_section_bg_image");
            $table->dropColumn("cta_section_bg_image");



        });
    }
};
