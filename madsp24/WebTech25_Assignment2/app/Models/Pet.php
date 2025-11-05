<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /** @use HasFactory<\Database\Factories\PetFactory> */
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'address',
        'city',
        'postcode',
        'petName',
        'petAge',
        'type',
        'training',
        'petDescription',
        'image',
    ];

    protected $hidden = [

    ];
}
