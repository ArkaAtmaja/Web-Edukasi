<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianKursus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "pembelian_kursuses";

    protected $primaryKey = "id";

    protected $fillable = [
        'id_user',
        'id_jenis_transaksi',
        'id_kursus',
        'tanggal_pembelian',
        'harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function jenisTransaksi()
    {
        return $this->belongsTo(JenisTransaksi::class, 'id_jenis_transaksi');
    }

    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'id_kursus');
    }
}
