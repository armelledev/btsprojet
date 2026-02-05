<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['libelle'];

    public function personnels()
    {
        return $this->hasMany(personnel::class);
    }
}
