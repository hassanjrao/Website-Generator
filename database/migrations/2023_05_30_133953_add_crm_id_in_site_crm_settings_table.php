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
        Schema::table('site_crm_settings', function (Blueprint $table) {

            $table->unsignedBigInteger("crm_id")->nullable()->after("id");
            $table->foreign("crm_id")->references("id")->on("crms")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_crm_settings', function (Blueprint $table) {

            $table->dropForeign(["crm_id"]);
            $table->dropColumn("crm_id");

        });
    }
};
