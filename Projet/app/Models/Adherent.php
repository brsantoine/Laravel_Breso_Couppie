<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['club_id', 'nom', 'prenom', 'age', 'sexe'];

    public function club() {
        return $this->belongsTo(Club::class);
    }

    public function equipes() {
        return $this->belongsToMany(Equipe::class);
    }

    public function matches() {
        return $this->belongsToMany(Match::class);
    }
}
