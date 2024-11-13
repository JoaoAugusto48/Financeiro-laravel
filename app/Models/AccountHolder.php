<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHolder extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'linkAccount', 'description', 'phone', 'email', 'address', 'category_id', 'favorite', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'accountHolder_id');
    }
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'relatedHolder_id');
    }

    public function allowances()
    {
        return $this->hasMany(Allowance::class, 'relatedHolder_id');
    }

    public function category()
    {
        return $this->belongsTo(AccountHolderCategory::class, 'category_id');
    }
}
