<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resignation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'reason', 'rate', 'long_learn', 'signature'
    ];
}
