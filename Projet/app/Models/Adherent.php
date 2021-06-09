<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function club() {
        return $this->belongsTo(Club::class);
    }

    public function equipes() {
        return $this->belongsToMany(Equipe::class);
    }
}
