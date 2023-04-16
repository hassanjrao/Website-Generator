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
        Schema::create('site_page_layouts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_id')->constrained('sites');
            $table->foreignId('page_layout_id')->constrained('page_layouts');

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
        Schema::dropIfExists('site_page_layouts');
    }
};
