<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelUpdated;

class Bencana extends Model
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

    public $table = "bencanas";
    public $timestamps = true;

    protected $fillable = [

        'id',
        'jns_bencana',
        'id_keluarga',
        'alamat_bencana',
        'tanggal_bencana',
        'waktu_bencana',
        'created_at',
        'updated_at'
    ];


    public function bantuan()
    {
        return $this->hasMany(Bantuan::class, 'id_bencana', 'id');
    }

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id');
    }

}
