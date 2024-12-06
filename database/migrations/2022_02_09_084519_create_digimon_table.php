<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigimonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digimon', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 150);
            $table->string("descripcion", 1000);
            $table->string("rango", 5);
            $table->string("nivel", 20);
            $table->string("utilidad", 50);
            $table->string("atributo", 15);
            $table->string("tipo", 20);
            $table->integer("health_points");
            $table->integer("digisoul_points");
            $table->integer("attack");
            $table->double("attack_speed", 2, 1);
            $table->double("critical_chance", 4, 2);
            $table->integer("hitrate");
            $table->integer("defense");
            $table->double("evasion", 4, 2);
            $table->string("skill1", 200);
            $table->integer("skill1_base");
            $table->integer("skill1_increment");
            $table->string("skill1_special", 1000)->nullable();
            $table->string("skill2", 200);
            $table->integer("skill2_base");
            $table->integer("skill2_increment");
            $table->string("skill2_special", 1000)->nullable();
            $table->string("skill3", 200)->nullable();
            $table->integer("skill3_base")->nullable();
            $table->integer("skill3_increment")->nullable();
            $table->string("skill3_special", 1000)->nullable();
            $table->string("skill4", 200)->nullable();
            $table->integer("skill4_base")->nullable();
            $table->integer("skill4_increment")->nullable();
            $table->string("skill4_special", 1000)->nullable();
            $table->string("foto", 100)->nullable();
            $table->string("icono", 100)->nullable();
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
        Schema::dropIfExists('digimon');
    }
}
