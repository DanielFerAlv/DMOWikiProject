<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DigimonFamilia extends Pivot
{
    protected $table = "digimon_familia";

    protected $fillable = array("digimon_id", "familia_id");
}
