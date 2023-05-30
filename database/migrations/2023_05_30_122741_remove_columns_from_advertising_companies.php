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
        Schema::table('advertising_companies', function (Blueprint $table) {
            $table->dropColumn([
                "url",
                "username",
                "password",
                "shipping_id",
                "compaign_id",
                "tran_type",
                "offer_id",
                "billing_model_id",
                "gateway_id",

            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertising_companies', function (Blueprint $table) {

            $table->string("url");
            $table->string("username");
            $table->string("password");
            $table->string("shipping_id");
            $table->string('compaign_id');
            $table->string('tran_type');
            $table->string('offer_id');
            $table->string('billing_model_id');
            $table->string('gateway_id');
        });
    }
};
