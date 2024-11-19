<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'user_id', 'account_id'
    ];

    protected $amount;

    public function deposit(float $value): void
    {
        $this->amount += $value; 
    }

    public function withdraw(float $value): void
    {
        $this->amount -= $value;
    }

}
