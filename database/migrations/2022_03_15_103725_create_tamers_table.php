<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamers', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 150);
            $table->string("descripcion", 1000);
            $table->string("utilidad", 50);
            $table->integer("health_points");
            $table->integer("digisoul_points");
            $table->integer("attack");
            $table->integer("defense");
            $table->string("active_skill_name", 200);
            $table->string("active_skill_effect", 1000);
            $table->string("active_skill_cooldown", 50);
            $table->string("passive_skill_name", 200);
            $table->string("passive_skill_effect1", 1000);
            $table->string("passive_skill_effect2", 1000);
            $table->string("active_skill_icon", 100)->nullable();
            $table->string("passive_skill_icon", 100)->nullable();
            $table->string("tamer_icon", 100)->nullable();
            $table->string("tamer_model", 100)->nullable();
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
        Schema::dropIfExists('tamers');
    }
}
