<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_rumah extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat',
        'kota',
        'img',
        'amount',
        'status',
    ];
}
