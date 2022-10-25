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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('nrp');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas');

            $table->unsignedBigInteger('id_semesters');
            $table->foreign('id_semesters')->references('id')->on('semesters');

            $table->unsignedBigInteger('id_prodis');
            $table->foreign('id_prodis')->references('id')->on('prodis');

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
        Schema::dropIfExists('mahasiswas');
    }
};
