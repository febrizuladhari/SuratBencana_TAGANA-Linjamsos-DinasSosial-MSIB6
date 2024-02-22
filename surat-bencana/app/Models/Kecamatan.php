<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_kecamatan',
        'nama_kecamatan',
        'nip_camat',
        'nama_camat',
        'created_at',
        'updated_at'
    ];
}