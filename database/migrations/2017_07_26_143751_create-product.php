<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('uid')->primary()->unique();
            $table->string('product_name')->nullable();
            $table->string('product_company')->nullable();
            $table->string('category')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('cp',8,2)->nullable();
            $table->float('sp',8,2)->nullable();
            $table->string('dealer_code')->nullable();
            $table->string('sanskruti_code')->nullable();
            $table->string('distributor')->nullable();
            $table->date('date_arr')->nullable();
            $table->string('batch')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('flag')->nullable();
            $table->rememberToken();
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
}
