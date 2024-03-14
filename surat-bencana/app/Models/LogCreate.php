<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogCreate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'level',
        'aktivitas',
        'tabel',
        'data',
        'waktu',

    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
