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
        Schema::create('site_term_others', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("site_id");
            $table->foreign("site_id")->references("id")->on("sites")->onDelete("cascade");

            $table->boolean('display_category')->default(false);
            $table->boolean('display_billing_model')->default(false);
            $table->boolean("display_related_products")->default(false);
            $table->boolean("show_navigation_cart")->default(false);
            $table->boolean("only_show_first_price")->default(false);
            $table->boolean("show_navigartion_cart")->default(false);
            $table->boolean("show_popular_products")->default(false);
            $table->integer("popular_products")->default(0);
            $table->boolean("one_product_cart_limit")->default(false);
            $table->boolean("shipping_option")->default(false);
            $table->string("shipping_name")->nullable();
            $table->decimal("shipping_price", 10, 2)->default(0);
            $table->boolean("generic_terms")->default(false);
            $table->boolean("individual_product_terms")->default(false);
            $table->boolean("total_price_terms")->default(false);
             

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
        Schema::dropIfExists('site_term_others');
    }
};
