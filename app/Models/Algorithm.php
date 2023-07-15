<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algorithm extends Model
{
    use HasFactory;

    protected $table = 'algorithms';

    protected $fillable = [
        'category',
        'name',
    ];
}
