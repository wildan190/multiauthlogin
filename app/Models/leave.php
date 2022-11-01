<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee', 'leave_type', 'from_date', 'to_date', 'days', 'leave', 'status', 'action_by', 'action_date'
    ];
}
