<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'value', 
        'description', 
        'transactionType', 
        'favorite', 
        'account_id',
        'externalAccount_id', 
        'transactionCategory_id', 
    ];

    protected $attributes = [
        'status' => true,
        'favorite' => false,
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function externalAccount()
    {
        return $this->belongsTo(AccountHolder::class, 'externalAccount_id');
    }

    public function transactionCategory()
    {
        return $this->hasMany(TransactionCategory::class, 'transactionCategory_id');
    }

}
