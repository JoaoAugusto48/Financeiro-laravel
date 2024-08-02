<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'value', 'kindTransaction', 'descriptionReason', 'relatedHolder_id', 'account_id'];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function relatedHolder()
    {
        return $this->belongsTo(AccountHolder::class, 'relatedHolder_id');
    }
}
