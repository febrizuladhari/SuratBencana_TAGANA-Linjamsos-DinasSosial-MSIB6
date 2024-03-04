<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBantuan extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'deskripsi',
        'jumlah',
        'id_bantuan',
        'created_at',
        'updated_at'
    ];

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class, 'id_bantuan', 'id');
    }
}
