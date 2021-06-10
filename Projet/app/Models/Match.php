<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tournoi() {
        return $this->belongsTo(Tournoi::class);
    }

    public function equipe() {
        return $this->belongsTo(Equipe::class);
    }

    public function adherents() {
        return $this->belongsToMany(Adherent::class);
    }
}
