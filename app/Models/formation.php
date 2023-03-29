<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public function referenciel()
    {
        return $this->belongsTo(Referenciel::class);

    }
    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_formation');
    }
}
