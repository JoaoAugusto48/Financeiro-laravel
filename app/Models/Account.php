<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['accountNumber', 'bank_id', 'accountHolder_id', 'favorite'];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function accountHolder()
    {
        return $this->belongsTo(AccountHolder::class, 'accountHolder_id');
    }

    public function deposit(float $value): void
    {
        $this->balance += $value; 
    }

    public function withdraw(float $value): void
    {
        $this->balance -= $value;
    }
}
