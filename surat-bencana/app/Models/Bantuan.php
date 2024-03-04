<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'jns_bantuan',
        'id_bencana',
        'created_at',
        'updated_at'
    ];

    public function detailBantuan()
    {
        return $this->hasMany(DetailBantuan::class);
    }

    public function bencana()
    {
        return $this->belongsTo(Bencana::class, 'id_bencana', 'id');
    }
}
