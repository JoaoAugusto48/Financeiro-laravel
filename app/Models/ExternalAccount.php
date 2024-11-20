<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalAccount extends Model
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
        'accountCategory_id'
    ];

    protected $attributes = [
        'status' => true,
        'favorite' => false,
    ];

    public function accountCategory()
    {
        return $this->belongsTo(AccountCategory::class, 'accountCategory_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'externalAccount_id');
    }
}
