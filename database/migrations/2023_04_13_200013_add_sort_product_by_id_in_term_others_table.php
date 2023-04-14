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
        Schema::table('site_term_others', function (Blueprint $table) {

            $table->foreignId('sort_product_by_id')->nullable()->constrained('sort_product_by')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_term_others', function (Blueprint $table) {

            $table->dropForeign(['sort_product_by_id']);
            $table->dropColumn('sort_product_by_id');
        });
    }
};
