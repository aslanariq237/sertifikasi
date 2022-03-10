<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('password');
            $table->integer('nomor_kwh');
            $table->string('alamat');
            $table->integer('id_tarif');
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
        Schema::dropIfExists('_pelanggan');
    }
}
