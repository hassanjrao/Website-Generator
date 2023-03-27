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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("url")->nullable();
            $table->string("email")->nullable();
            $table->text("description")->nullable();
            $table->string("corp_name")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("address")->nullable();
            $table->string("fulfillment")->nullable();
            $table->string("return_address")->nullable();
            $table->string("trial_period")->nullable();
            $table->string("trial_period_breakdown")->nullable();
            $table->string("shipping_period")->nullable();
            $table->string("shipping_carrier")->nullable();
            $table->string("customer_service_hours")->nullable();
            $table->string("style_sheet")->nullable();
            $table->string("maximum_ticket_value")->nullable();

            $table->unsignedBigInteger("created_by")->nullable();
            $table->foreign("created_by")->references("id")->on("users")->onDelete("cascade");

            $table->unsignedBigInteger("updated_by")->nullable();
            $table->foreign("updated_by")->references("id")->on("users")->onDelete("cascade");

            $table->unsignedBigInteger("deleted_by")->nullable();
            $table->foreign("deleted_by")->references("id")->on("users")->onDelete("cascade");

            $table->softDeletes();

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
        Schema::dropIfExists('sites');
    }
};
