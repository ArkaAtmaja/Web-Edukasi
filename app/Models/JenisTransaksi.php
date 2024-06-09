<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTransaksi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jenis_transaksis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_transaksi',
    ];
}
