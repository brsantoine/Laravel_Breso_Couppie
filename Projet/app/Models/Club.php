<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['club_id', 'nom', 'prenom', 'age', 'sexe'];

    public function adherents() {
        return $this->hasMany(Adherent::class);
    }

    public function equipes() {
        $fillable = ['nom'];
        return $this->hasMany(Equipe::class);
    }


}
