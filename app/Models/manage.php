<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manage extends Model
{
    protected $fillable =
    [
        'name',
        'roll',
        'comment'
    ];
    use HasFactory;
}
