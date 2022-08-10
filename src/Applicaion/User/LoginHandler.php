<?php

declare(strict_types=1);

namespace TradeNetwork\Applicaion\User;

use App\Enums\User\Auth\Status;
use Illuminate\Http\Response;

class LoginHandler
{
    public function login(LoginCommand $command): Response
    {
        $user = $command->getUser();

        return new Response([
            'access_token' => $user->createToken('webToken')->plainTextToken,
            'status' => Status::LOGGED_IN
        ]);
    }
}
