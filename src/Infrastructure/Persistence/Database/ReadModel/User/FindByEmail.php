<?php

declare(strict_types=1);

namespace TradeNetwork\Infrastructure\Persistence\Database\ReadModel\User;

use App\Models\User;
use TradeNetwork\Domain\ReadModel\User\FindByEmail as FindUserByEmail;
use TradeNetwork\Domain\Value\StringIdentifier;

class FindByEmail implements FindUserByEmail
{
    public function find(StringIdentifier $stringIdentifier): User
    {
        return User::where('email', $stringIdentifier->asString())->first();
    }
}
