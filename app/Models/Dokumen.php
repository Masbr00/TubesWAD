<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = "tabel_dokumen";
    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'tgl_lahir',
        'pl',
        'alamat',
        'rtrw',
        'kelurahan',
        'kecamatan',
        'agama',
        'nikah',
        'pekerjaan',
        'kewarganegaraan',
        'pasfoto',
        'kk',
        'surat_pengantar',
        'pengiriman',
    ];
}
