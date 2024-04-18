<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $fillable = ["type", "src"];
}
