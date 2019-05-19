<?php

namespace App\Events;

use App\User;
use Illuminate\Queue\SerializesModels;


class UserSaving
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param \App\User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }



}
