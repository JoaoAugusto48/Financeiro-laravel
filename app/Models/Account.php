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
        return $this->belongsTo(Bank::class);
    }

    public function accountHolder()
    {
        return $this->belongsTo(AccountHolder::class);
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
