<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    use HasFactory;

    public $table = "bencanas";
    public $timestamps = true;

    protected $fillable = [

        'id',
        'jns_bencana',
        'id_keluarga',
        'tanggal_bencana',
        'created_at',
        'updated_at'
    ];


    public function bantuan()
    {
        return $this->hasMany(Bantuan::class);
    }

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga');
    }

}
