<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resignation extends Model
{
    use HasFactory;
    protected $fillable = [
        'data1', 'data2', 'data3', 'data4'
    ];
}
