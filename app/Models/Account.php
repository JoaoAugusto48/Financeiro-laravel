<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $balance;
    protected $fillable = [
        'accountNumber', 
        'description', 
        'favorite',
        'bank_id', 
        'accountHolder_id', 
        'user_id', 
    ];

    protected $attributes = [
        'status' => true,
        'favorite' => false,
    ];

    public function deposit(float $value): void
    {
        $this->balance += $value; 
    }

    public function withdraw(float $value): void
    {
        $this->balance -= $value;
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function accountHolder()
    {
        return $this->belongsTo(AccountHolder::class, 'accountHolder_id');
    }
}
