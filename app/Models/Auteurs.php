<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteurs extends Model
{
    use HasFactory;

    public function livres()
    {
        return $this->hasMany(Livres::class, 'id_auteur');
    }
}
