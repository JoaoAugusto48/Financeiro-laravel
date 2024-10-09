<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['value', 'kindTransaction', 'description', 'dateTransaction', 'account_id', 'relatedHolder_id'];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function relatedHolder()
    {
        return $this->belongsTo(AccountHolder::class, 'relatedHolder_id');
    }

    public function transactionCategory()
    {
        return $this->belongsTo(TransactionCategory::class, 'transactionCategory_id');
    }

    protected static function booted(): void
    {
        self::addGlobalScope('ordered', function (Builder $querybuilder): void {
            $querybuilder->orderByDesc('dateTransaction');
        });
    } 
}
