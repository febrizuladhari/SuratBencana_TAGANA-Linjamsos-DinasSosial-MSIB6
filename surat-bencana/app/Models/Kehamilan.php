<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehamilan extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_kehamilan',
        'kehamilan',
        'created_at',
        'updated_at'
    ];
}