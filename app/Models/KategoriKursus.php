<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKursus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'kategori_kursuses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kategori',
    ];
}
