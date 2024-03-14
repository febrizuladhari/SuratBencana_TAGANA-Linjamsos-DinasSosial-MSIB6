<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Login;
use App\Models\UserLog;

class LogLogin
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
    public function handle(Login $event)
    {
        $user = $event->user;
        UserLog::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'level' => $user->level,
            'aktivitas' => 'Login',
            'waktu' => now(),
        ]);
    }
}
