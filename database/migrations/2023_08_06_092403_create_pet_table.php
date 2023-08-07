<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama_pet');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->integer('berat');
            $table->string('spesies');
            $table->string('ras');
            $table->string('warna');
            $table->string('vaksin');
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
        Schema::dropIfExists('pet');
    }
}
