<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgressBaby extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'id_bayi',
      'bulan_ke',
      'panjang_bayi',
      'berat_bayi'
    ];
}
