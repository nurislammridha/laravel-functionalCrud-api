<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $fillable =
    [
        'roll',
        'name',
        'address'
    ];
    use HasFactory;
}
