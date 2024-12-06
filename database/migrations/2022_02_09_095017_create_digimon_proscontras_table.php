<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigimonProscontrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digimon_proscontra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('digimon_id');
            $table->unsignedBigInteger('procontra_id');
            $table->timestamps();

            $table->foreign('digimon_id')->references('id')->on('digimon')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('procontra_id')->references('id')->on('proscontras')->onDelete('cascade')->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digimon_proscontra');
    }
}
