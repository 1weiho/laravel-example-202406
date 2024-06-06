<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identity',
        'gender',
        'birthday',
    ];

    public function getIdentityAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function setIdentityAttribute($value)
    {
        $this->attributes['identity'] = Crypt::encryptString($value);
    }
}
