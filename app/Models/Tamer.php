<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamer extends Model
{
    use HasFactory;

    protected $table = "tamers";

    protected $fillable = [
        "nombre",
        "descripcion",
        "utilidad",
        "health_points",
        "digisoul_points",
        "attack",
        "defense",
        "active_skill_name",
        "active_skill_effect",
        "active_skill_cooldown",
        "passive_skill_name",
        "passive_skill_effect1",
        "passive_skill_effect2",
        "active_skill_icon",
        "passive_skill_icon",
        "tamer_icon",
        "tamer_model",
    ];
}
