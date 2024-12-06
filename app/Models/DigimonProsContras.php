<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DigimonProsContras extends Pivot
{
    protected $table = "digimon_proscontra";

    protected $fillable = array("digimon_id", "procontra_id");
}
