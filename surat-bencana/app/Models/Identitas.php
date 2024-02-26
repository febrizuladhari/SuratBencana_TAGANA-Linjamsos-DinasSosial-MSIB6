<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'nik',
        'nama',
        'status',
        'usia',
        'jns_kelamin',
        'kehamilan',
        'no_kk',
        'created_at',
        'updated_at'
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'no_kk', 'no_kk');
    }

}
