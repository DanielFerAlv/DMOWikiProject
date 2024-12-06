<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsContras extends Model
{
    use HasFactory;

    protected $table = "proscontras";

    protected $fillable = [
        'nombre',
        'pro_contra',
        'descripcion',
    ];

}
