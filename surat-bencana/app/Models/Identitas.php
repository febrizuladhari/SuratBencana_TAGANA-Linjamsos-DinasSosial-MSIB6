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
        'kehamilan',
        'alamat',
        'id_keluarga',
        'id_kelurahan',
        'id_bantuan',
        'id_bencana',
        'tanggal_bencana',
        'created_at',
        'updated_at'
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
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
