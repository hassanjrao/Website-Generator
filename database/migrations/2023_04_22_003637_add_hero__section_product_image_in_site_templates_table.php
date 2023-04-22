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
            
            $table->string('hero_section_product_image')->nullable()->after('hero_section_bg_image');

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
            
            $table->dropColumn('hero_section_product_image');

        });
    }
};
