<?php

declare(strict_types=1);

namespace App\Enums\User\Auth;

enum Status: string
{
    case LOGGED_IN = 'logged_in';
    case LOGGED_OUT = 'logged_out';
}
