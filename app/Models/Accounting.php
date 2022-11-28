<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang','jumlah_barang', 'harga_satuan', 'total_harga', 'catatan','tanggal','cash', 'tools', 'equipment', 'debt', 'details'
    ];
}
