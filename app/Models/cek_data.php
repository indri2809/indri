<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cek_data extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_rumah',
        'nama',
        'noHp',
        'tgl_sewa',
        'tgl_keluar',
        
    ];
}
