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
        Schema::table('site_credit_cards', function (Blueprint $table) {

            $table->dropForeign(['credit_card_id']);
            $table->dropColumn('credit_card_id');

            $table->foreignId('credit_card_set_id')
                ->constrained()
                ->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_credit_cards', function (Blueprint $table) {

            $table->dropForeign(['credit_card_set_id']);
            $table->dropColumn('credit_card_set_id');

            $table->foreignId('credit_card_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }
};
