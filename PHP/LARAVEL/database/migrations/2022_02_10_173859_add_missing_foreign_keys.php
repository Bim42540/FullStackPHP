<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shopping_session', function (Blueprint $table) {

            $table->bigInteger('user_id')->unsigned()->change();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->change();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->bigInteger('payment_id')->unsigned()->change();
            $table->foreign('payment_id')->references('id')->on('payment_details')->onDelete('cascade');
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->change();
            $table->foreign('order_id')->references('id')->on('order_details')->onDelete('cascade');
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned()->change();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });

        Schema::table('cart_item', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned()->change();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });

        Schema::table('product', function (Blueprint $table) {
            $table->bigInteger('discount_id')->unsigned()->change();
            $table->foreign('discount_id')->references('id')->on('discount')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
