<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_kelurahan',
        'nama_kelurahan',
        'nip_lurah',
        'nama_lurah',
        'id_kecamatan',
        'created_at',
        'updated_at'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }
}