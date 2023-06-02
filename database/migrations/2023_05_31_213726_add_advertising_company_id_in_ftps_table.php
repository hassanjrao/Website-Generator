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
        Schema::table('ftps', function (Blueprint $table) {

            $table->unsignedBigInteger('advertising_company_id')->nullable()->after('id');
            $table->foreign('advertising_company_id')->references('id')->on('advertising_companies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ftps', function (Blueprint $table) {
            $table->dropForeign('ftps_advertising_company_id_foreign');
            $table->dropColumn('advertising_company_id');
        });
    }
};
