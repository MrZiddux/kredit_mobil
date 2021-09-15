<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_mobil', 20)->primary();
            $table->string('merk', 50);
            $table->string('type', 50);
            $table->string('warna', 50);
            $table->float('harga_mobil');
            $table->string('gambar', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}
