<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_bus',
        'asal',
        'tujuan',
        'nama_penumpang',
        'email_penumpang',
        'kursi',
    ];
}
