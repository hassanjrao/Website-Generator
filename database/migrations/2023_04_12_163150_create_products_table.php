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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('advertising_company_id')->constrained('advertising_companies')->onDelete('cascade');
            $table->string('sticky_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('show_ingredients');
            $table->string('ingredients_image');
            $table->string('category');
            $table->string('billing_model');

            $table->double('ss_price', 10, 2);
            $table->double('ss_shipping', 10, 2);
            $table->string('ss_max_quantity', 10, 2);

            $table->double('trial_price', 10, 2);
            $table->double('trial_shipping', 10, 2);
            $table->double('trial_rebill_price', 10, 2);
            $table->double('trial_max_quantity', 10, 2);

            $table->double('continuity_price', 10, 2);
            $table->double('continuity_shipping', 10, 2);
            $table->double('continuity_max_quantity', 10, 2);

            $table->boolean('straight_sale_multi_price')->default(false);

            $table->boolean('enable_max_quantity')->default(false);

            $table->boolean('size_option')->default(false);

            $table->boolean('status')->default(false);


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
        Schema::dropIfExists('products');
    }
};
