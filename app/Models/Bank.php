<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'name', 'abbreviation', 'deleteable'];
    
    public function account()
    {
        return $this->hasMany(Account::class, 'id');
    }
}
