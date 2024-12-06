<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigimonFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digimon_familia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('digimon_id');
            $table->unsignedBigInteger('familia_id');
            $table->timestamps();

            $table->foreign('digimon_id')->references('id')->on('digimon')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade')->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digimon_familia');
    }
}
