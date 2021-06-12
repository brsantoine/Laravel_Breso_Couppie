<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['club_id', 'nom'];

    public function matches() {
        $fillable = ['tournoi_id', 'equipeA_id', 'equipeB_id', 'score', 'date', 'duree'];
        return $this->hasMany(Match::class);
    }

    public function club() {
        return $this->belongsTo(Club::class);
    }

    public function adherents() {
        return $this->belongsToMany(Adherent::class);
    }
}
