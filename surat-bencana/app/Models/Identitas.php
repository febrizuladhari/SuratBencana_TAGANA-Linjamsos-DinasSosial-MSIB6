<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Events\ModelUpdated;


class Identitas extends Model
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
