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
        Schema::table('site_templates', function (Blueprint $table) {

            $table->unsignedBigInteger("contact_page_id")->nullable()->after("checkout_page_id");
            $table->foreign("contact_page_id")->references("id")->on("contact_pages")->onDelete("cascade");

            $table->unsignedBigInteger("cart_page_id")->nullable()->after("contact_page_id");
            $table->foreign("cart_page_id")->references("id")->on("cart_pages")->onDelete("cascade");

            $table->unsignedBigInteger("navigation_page_id")->nullable()->after("cart_page_id");
            $table->foreign("navigation_page_id")->references("id")->on("navigation_pages")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_templates', function (Blueprint $table) {

            $table->dropForeign(["contact_page_id"]);
            $table->dropColumn("contact_page_id");

            $table->dropForeign(["cart_page_id"]);
            $table->dropColumn("cart_page_id");

            $table->dropForeign(["navigation_page_id"]);
            $table->dropColumn("navigation_page_id");

        });
    }
};
