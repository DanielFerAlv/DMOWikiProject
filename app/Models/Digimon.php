<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digimon extends Model
{
    use HasFactory;

    protected $table = "digimon";

    protected $fillable = [
        "nombre",
        "descripcion",
        "rango",
        "nivel",
        "utilidad",
        "atributo",
        "tipo",
        "health_points",
        "digisoul_points",
        "attack",
        "attack_speed",
        "critical_chance",
        "hitrate",
        "defense",
        "evasion",
        "skill1",
        "skill1_base",
        "skill1_increment",
        "skill1_special",
        "skill2",
        "skill2_base",
        "skill2_increment",
        "skill2_special",
        "skill3",
        "skill3_base",
        "skill3_increment",
        "skill3_special",
        "skill4",
        "skill4_base",
        "skill4_increment",
        "skill4_special",
        "foto",
        "icono",
    ];
}
