<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastersupplier', function (Blueprint $table) {
            $table->string('kodeSupplier')->unique();
            $table->string('namaSupplier');
            $table->string('alamatSupplier');
            $table->string('kotaSupplier');
            $table->string('jenisSupplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastersupplier');
    }
}
