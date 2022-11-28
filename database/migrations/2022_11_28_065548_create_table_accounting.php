<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAccounting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->int('jumlah_barang');
            $table->int('harga_satuan');
            $table->int('total_harga');
            $table->string('catatan');
            $table->string('tanggal');
            $table->int('cash');
            $table->int('tools');
            $table->int('equipment');
            $table->int('debt');
            $table->string('details');
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
        Schema::dropIfExists('table_accounting');
    }
}
