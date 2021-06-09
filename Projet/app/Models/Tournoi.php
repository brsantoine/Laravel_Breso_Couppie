<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['equipeA_id', 'equipeB_id', 'score_match', 'date_match', 'duree_match'];

    public function matches() {
        return $this->hasMany(Match::class);
    }
}
