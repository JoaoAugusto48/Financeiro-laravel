<?php

namespace App\Models\Analytic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentPlan extends Model
{
    use HasFactory;
    protected $fillable = ['month', 'year', 'planned_amount'];
}
