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
    public function create()
{
    
    $categories = \App\Models\Category::all(); 
    
    // On retourne la vue qui se trouve dans resources/views/staff/create.blade.php
    return view('personnel.create', compact('categories'));
}
}
