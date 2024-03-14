<?php

namespace App\Listeners;

use App\Events\ModelUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Access\AuthorizationException;
use App\Models\LogUpdate;
use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class LogModelUpdated
{
    use InteractsWithQueue;
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
    public function handle(ModelUpdated $event)
    {
        $model = $event->model;
        $oldData = $event->oldData;
        $newData = $model->toArray();
        $user = $event->user;

        // Hapus kolom yang tidak diperlukan dari old_data dan new_data
        $excludedColumns = ['id', 'created_at', 'updated_at'];
        $oldData = array_filter($oldData, function ($key) use ($excludedColumns) {
            return !in_array($key, $excludedColumns);
        }, ARRAY_FILTER_USE_KEY);
        $newData = array_filter($newData, function ($key) use ($excludedColumns) {
            return !in_array($key, $excludedColumns);
        }, ARRAY_FILTER_USE_KEY);


        DB::table('log_updates')->insert([
            'user_id' => $user->id,
            'name' => $user->name,
            'level' => $user->level,
            'aktivitas' => 'Update',
            'tabel' => $model->getTable(),
            'old_data' => json_encode($oldData),
            'new_data' => json_encode($newData),
            'waktu' => now(),
        ]);

    }
}
