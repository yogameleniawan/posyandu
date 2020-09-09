<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_babies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_bayi');
            $table->integer('bulan_ke');
            $table->decimal('panjang_bayi', 11, 2);
            $table->decimal('berat_bayi', 11, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress_babies');
    }
}
