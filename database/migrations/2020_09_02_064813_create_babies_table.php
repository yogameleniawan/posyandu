<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 256);
            $table->string('nama_ibu', 256);
            $table->string('pekerjaan_ibu', 256);
            $table->string('nama_ayah', 256);
            $table->string('pekerjaan_ayah', 256);
            $table->string('tempat_lahir', 256);
            $table->bigInteger('tanggal_lahir');
            $table->integer('anak_ke');
            $table->string('alamat', 256);
            $table->integer('jenis_kelamin');
            $table->string('golongan_darah');
            $table->decimal('panjang_bayi', 11, 2);
            $table->decimal('berat_bayi', 11, 2);
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
        Schema::dropIfExists('babies');
    }
}
