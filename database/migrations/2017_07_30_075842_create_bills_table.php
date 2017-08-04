<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice')->unique();
            $table->string('employee_name');
            $table->integer('employee_id');
            $table->string('customer_name')->nullable();
            $table->bigInteger('phone_no')->nullable();
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            $table->integer('profit');
            $table->integer('totalprice');
            $table->date('billdate');
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
        Schema::dropIfExists('bills');
    }
}
