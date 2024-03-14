<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class Kecamatan extends Model
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

    protected $fillable = [

        'id',
        'nama_kecamatan',
        'nip_camat',
        'nama_camat',
        'created_at',
        'updated_at'
    ];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class, 'id_kecamatan', 'id');
    }


}
