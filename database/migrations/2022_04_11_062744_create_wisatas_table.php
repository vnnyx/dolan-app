<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->foreign('username')->references('username')->on('users');
            $table->string('nama_wisata')->unique();
            $table->bigInteger('stock_tiket')->nullable();
            $table->bigInteger('harga_tiket')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('alamat');
            $table->string('open');
            $table->string('close');
            $table->string('credential');
            $table->double('latitude');
            $table->double('longitude');
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
        Schema::dropIfExists('wisatas');
    }
};
