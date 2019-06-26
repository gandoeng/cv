<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengalaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengalaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kantor');
            $table->string('jenis');
            $table->year('tahun_masuk');
            $table->year('tahun_keluar');
            $table->string('kota');
            $table->string('negara');
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
        Schema::dropIfExists('table_pengalaman');
    }
}
