<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{

    use HasFactory;

    // C'est ici, à l'intérieur de la classe !
    protected $fillable = [
        'user_id', 
        'category_id', 
        'full_name', 
        'age', 
        'phone', 
        'neighborhood', 
        'profile_photo'
    ];

    /**
     * Les relations (pour plus tard)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
     
    //

