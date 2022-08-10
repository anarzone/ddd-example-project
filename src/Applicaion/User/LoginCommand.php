<?php

declare(strict_types=1);

namespace TradeNetwork\Applicaion\User;

use App\Models\User;

class LoginCommand
{
    public function __construct(public User $user)
    {
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
