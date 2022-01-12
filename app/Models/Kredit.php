<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;

    protected $table = 'kredit';

    protected $fillable = [
        'nama_kredit',
        'user',
        'jumlah',
        'harga',
        'total',
        'keterangan'
    ];
}
