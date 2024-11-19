<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'status', 
        'favorite',
        'accountCategory_id',
    ];

    protected $attributes = [
        'status' => true,
        'favorite' => false,
    ];
}
