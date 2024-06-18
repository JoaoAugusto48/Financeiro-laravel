<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'value', 'kindTransaction', 'descriptionReason'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function accountHolder()
    {
        return $this->belongsTo(AccountHolder::class);
    }
}
