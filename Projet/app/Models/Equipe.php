<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillabe = ['tournoi_id', 'equipeA_id', 'equipeB_id', 'score', 'date', 'duree'];

    public function matches() {
        return $this->hasMany(Match::class);
    }

    public function club() {
        return $this->belongsTo(Club::class);
    }

    public function adherents() {
        return $this->belongsToMany(Adherent::class);
    }
}
