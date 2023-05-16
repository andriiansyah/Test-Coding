<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'jenis_kelamin',
        'tgl_lahir',
        'agama',
        'alamat',
        'pendidikan_terakhir',
        'lokasi_kampus',
        'program_studi',
        'ktp',
        'ijazah',
    ];
}
