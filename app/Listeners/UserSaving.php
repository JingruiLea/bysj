<?php

namespace App\Listeners;

use App\Events\UserSaving as UserSavingEvent;
use App\role_user;

class UserSaving
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\UserSavingEvent $event
     * @return mixed
     */
    public function handle(UserSavingEvent $event)
    {
        app('log')->info($event->user);
        role_user::create([
            'role_id' => 2,
            'user_id' => $event->user->id,
        ])->save();
    }
}