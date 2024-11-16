<?php

namespace App\Models\Analytic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = ['month', 'year', 'totalAmount'];
}
