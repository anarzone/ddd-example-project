<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use TradeNetwork\Applicaion\User\LoginCommand;
use TradeNetwork\Applicaion\User\LoginHandler;
use TradeNetwork\Domain\ReadModel\User\FindByEmail;
use TradeNetwork\Domain\Value\StringIdentifier;
use TradeNetwork\Validator\UserLoginValidator;

class AuthController extends Controller
{
    public function __construct(public FindByEmail $findByEmail)
    {
    }

    public function login(UserLoginRequest $request){
        $user = $this->findByEmail->find(StringIdentifier::createFromString($request->email));
        $loginValidator = new UserLoginValidator($user, StringIdentifier::createFromString($request->password));
        $loginValidator->validate();

        $command = new LoginCommand($user);
        $handler = new LoginHandler();

        return $handler->login($command);
    }
}
