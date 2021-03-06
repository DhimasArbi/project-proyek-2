<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('warna');
            $table->string('motif');
            $table->string('deskripsi');
            $table->string('asaldaerah');
            $table->string('gambar');
            $table->string('status');
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
        Schema::dropIfExists('batiks');
    }
}
