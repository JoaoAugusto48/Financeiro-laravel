<?php

namespace App\Models\Analytic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = ['month', 'year', 'invested_amount'];
}
