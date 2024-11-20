<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHolder extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'phone1', 
        'phone2', 
        'email', 
        'addressStreet', 
        'addressNumber', 
        'addressCity', 
        'addressCountry', 
        'addressComplement', 
        'addressPostalCode', 
        'status',
        'favorite', 
        'user_id', 
    ];

    protected $attributes = [
        'status' => true,
        'favorite' => false,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'accountHolder_id');
    }
}
