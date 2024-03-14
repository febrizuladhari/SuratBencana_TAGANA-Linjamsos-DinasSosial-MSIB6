<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class Keluarga extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $oldData = $model->getRawOriginal();
            $user = auth()->user();
            event(new ModelUpdated($model, $oldData, $user));
        });
    }


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
        return $this->hasMany(Bencana::class, 'id_keluarga', 'id');
    }

    public function identitas()
    {
        return $this->hasMany(Identitas::class, 'no_kk', 'no_kk');
    }


}
