<?php

namespace App\Listeners;

use App\Events\ModelCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\LogCreate;

class LogModelCreated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ModelCreated $event)
    {
        $model = $event->model;
        $user = $event->user;

        // Mengecualikan kolom id, created_at, dan updated_at
        $excludedColumns = ['id', 'created_at', 'updated_at'];

        $data = collect($model->toArray())
            ->except($excludedColumns)
            ->toArray();

        LogCreate::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'level' => $user->level,
            'aktivitas' => 'Create',
            'tabel' => $model->getTable(),
            'data' => json_encode($data),
            'waktu' => now(),
        ]);
    }
}
