<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['accountNumber', 'balance'];

    public function bank()
    {
        return $this->hasOne(Bank::class, 'id');
    }

    public function accountHolder()
    {
        return $this->hasOne(AccountHolder::class, 'id');
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
