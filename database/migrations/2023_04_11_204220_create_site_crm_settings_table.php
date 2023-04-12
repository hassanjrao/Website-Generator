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
        Schema::create('site_crm_settings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_id')->constrained('sites')->onDelete('cascade');
            $table->foreignId('advertising_company_id')->constrained('advertising_companies')->onDelete('cascade');

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
        Schema::dropIfExists('site_crm_settings');
    }
};
