<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'status', 
        'favorite', 
        'user_id'
    ];

    protected $attributes = [
        'status' => true,
        'favoreite' => false,
    ];
    
}
