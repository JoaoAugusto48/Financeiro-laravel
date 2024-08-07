<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHolder extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'linkAccount'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'accountHolder_id');
    }

    public function allowances()
    {
        return $this->hasMany(Allowance::class, 'relatedHolder_id');
    }
}
