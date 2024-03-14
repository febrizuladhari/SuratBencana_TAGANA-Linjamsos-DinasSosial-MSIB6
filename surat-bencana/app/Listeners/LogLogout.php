<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Logout;
use App\Models\UserLog;
use Illuminate\Http\Request;

class LogLogout
{

    /**
     * Create the event listener.
     */
    public function __construct(Request $request)
    {

    }

    /**
     * Handle the event.
     */
    public function handle(Logout $event)
    {
        $user = $event->user;

            UserLog::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'level' => $user->level,
                'aktivitas' => 'Logout',
                'waktu' => now(),
            ]);

    }
}
