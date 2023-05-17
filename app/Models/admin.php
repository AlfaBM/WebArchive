<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Casts\Attribute;

class admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'username',
        'password',
    ];

    // public function password(): Attribute
    // {
    //     return new Attribute(
    //         set: fn($value) => Hash::make($value),
    //         get: fn($value) => $value
    //     ); }

}
