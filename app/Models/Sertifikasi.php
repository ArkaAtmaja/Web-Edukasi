<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'sertifikasis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_sertifikat',
        'title',
        'question',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function sertifikat()
    {
        return $this->belongsTo(Sertifikat::class, 'id_sertifikat');
    }
}
