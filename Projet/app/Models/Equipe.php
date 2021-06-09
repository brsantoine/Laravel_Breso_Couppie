<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function club() {
        return $this->belongsTo(Club::class);
    }
}
