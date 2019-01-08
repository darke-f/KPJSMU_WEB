<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastercustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercustomer', function (Blueprint $table) {
            $table->string('kodeCustomer')->unique();
            $table->string('namaCustomer');
            $table->string('alamatCustomer');
            $table->string('keteranganCostumer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastercustomer');
    }
}
