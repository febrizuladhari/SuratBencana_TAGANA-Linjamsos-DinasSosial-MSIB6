<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class Bantuan extends Model
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
        'jns_bantuan',
        'id_bencana',
        'created_at',
        'updated_at'
    ];

    public function detailBantuan()
    {
        return $this->hasMany(DetailBantuan::class, 'id_bantuan', 'id');
    }

    public function bencana()
    {
        return $this->belongsTo(Bencana::class, 'id_bencana', 'id');
    }
}
