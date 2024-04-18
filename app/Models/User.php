<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "password",
        "phone",
        "proficient",
        "birth_year",
        "city",
        "country"
    ];

    protected $hidden = [
        "password"
    ];
}
