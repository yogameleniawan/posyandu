<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Baby extends Model
{
    use SoftDeletes;

    // fillable adalah kolom yang boleh diisi, sisanya tidak boleh
    protected $fillable = [
        'nama',
        'nama_ibu',
        'pekerjaan_ibu',
        'nama_ayah',
        'pekerjaan_ayah',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'alamat',
        'jenis_kelamin',
        'golongan_darah',
        'panjang_bayi',
        'berat_bayi',
    ];
}
