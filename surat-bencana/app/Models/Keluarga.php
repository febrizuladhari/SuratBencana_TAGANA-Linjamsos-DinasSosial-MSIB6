<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluargas';

    protected $fillable = [

        'id',
        'no_kk',
        'alamat',
        'id_kelurahan',
        'created_at',
        'updated_at'
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan', 'id');
    }

    public function bencana()
    {
        return $this->hasMany(Bencana::class);
    }

    public function identitas()
    {
        return $this->hasMany(Identitas::class);
    }


}
