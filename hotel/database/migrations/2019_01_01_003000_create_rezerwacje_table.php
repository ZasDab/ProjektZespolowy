<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezerwacjeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezerwacje', function (Blueprint $table) {
            $table->increments('id');
            $table->date('poczatek');
            $table->date('koniec');
            $table->decimal('cena');
            $table->integer('pokoj_id')->unsigned();
            $table->integer('klient_id')->unsigned();
            $table->foreign('pokoj_id')->references('id')->on('pokoje');
            $table->foreign('klient_id')->references('id')->on('klienci');
        });
        // Schema::table('pokoje', function($table) {
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezerwacje');
    }
}
