<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timesheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'tanggal', 'proyek', 'tempat_kerja', 'waktu', 'aktivitas'
    ];
}
