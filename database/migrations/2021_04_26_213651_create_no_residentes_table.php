<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoResidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_residentes', function (Blueprint $table) {
            $table->id();
            $table->float('preciominuto')->default(0.5);
            $table->string('placa');
            $table->bigInteger('total')->default(0);
            $table->bigInteger('tiempoestacionado')->default(1);
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
        Schema::dropIfExists('no_residentes');
    }
}
