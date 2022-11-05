<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_barang', 'kategori', 'nama_barang', 'jml_barang', 'tgl_input', 'note'
    ];
}
