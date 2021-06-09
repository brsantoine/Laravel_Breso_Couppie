<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    use HasFactory;

    public function getClubs() {
        //TODO
    }

    public function getDernierMatch() {
        //TODO
    }

    public function getClassementTournoiEnCours() {
        //TOOD
    }
}
