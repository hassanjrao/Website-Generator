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

            $table->string('popular_product_section_image')->nullable()->after('popular_product_section_id');

            $table->string("related_product_section_image")->nullable()->after('related_product_section_id');

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

            $table->dropColumn('popular_product_section_image');
            $table->dropColumn('related_product_section_image');

        });
    }
};
