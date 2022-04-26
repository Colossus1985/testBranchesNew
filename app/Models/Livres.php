<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    use HasFactory;

    public function auteurs()
    {
        return $this->belongsTo(Auteurs::class, 'id_auteur');
    }
}
