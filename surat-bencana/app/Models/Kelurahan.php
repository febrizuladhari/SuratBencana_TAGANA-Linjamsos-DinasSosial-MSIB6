<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class Kelurahan extends Model
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


    public $table = "kelurahans";
    public $timestamps = true;

    protected $fillable = [

        'id',
        'nama_kelurahan',
        'nip_lurah',
        'nama_lurah',
        'id_kecamatan',
        'created_at',
        'updated_at'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class, 'id_kelurahan', 'id');
    }


}
