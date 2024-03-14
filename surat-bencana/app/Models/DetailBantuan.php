<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class DetailBantuan extends Model
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
