<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'kursuses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_sertifikat',
        'id_kategori',
        'id_mentor',
        'nama_kursus',
        'waktu_penyelesaian',
        'tingkat_kesukaran',
        'pembelajaran',
    ];

    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class, 'id_sertifikat');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriKursus::class, 'id_kategori');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentor');
    }
}
