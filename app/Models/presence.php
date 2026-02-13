<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presnce extends Model
{
    protected $fillable =['user_id','date_jour','heure_arrivee','heure_depart','statut'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
