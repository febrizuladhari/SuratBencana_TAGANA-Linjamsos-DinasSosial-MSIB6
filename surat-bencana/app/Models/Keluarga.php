<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'no_kk',
        'nik',
        'created_at',
        'updated_at'
    ];
}
