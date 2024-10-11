<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'name', 'abbreviation', 'favorite', 'deleteable'];
    
    public function account()
    {
        return $this->hasMany(Account::class, 'id');
    }

    public static function booted(): void
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder): void {
            $queryBuilder->orderBy('name');
        });
    } 
}
