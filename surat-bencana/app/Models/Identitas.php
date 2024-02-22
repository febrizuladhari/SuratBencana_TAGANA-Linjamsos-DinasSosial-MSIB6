<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $fillable = [

        'nik',
        'nama',
        'status',
        'usia',
        'jns_kelamin',
        'id_kehamilan',
        'alamat',
        'no_kk',
        'id_kelurahan',
        'id_kecamatan',
        'id_bantuan',
        'jenis_bencana',
        'tanggal bencana',
        'created_at',
        'updated_at'
    ];

    public function kehamilan()
    {
        return $this->belongsTo(Kehamilan::class, 'id_kehamilan', 'id_kehamilan');
    }

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'no_kk', 'no_kk');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class, 'id_bantuan', 'id_bantuan');
    }

    public function bencana()
    {
        return $this->belongsTo(Bencana::class, 'id_bencana', 'id_bencana');
    }
}