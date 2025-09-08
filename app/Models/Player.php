<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * (Optional — Laravel will guess "players" from the class name.)
     */
    protected $table = 'sergio';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'position'
    ];

    
}
