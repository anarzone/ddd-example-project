<?php

declare(strict_types=1);

namespace TradeNetwork\Domain\ReadModel\User;

use App\Models\User;
use TradeNetwork\Domain\Value\StringIdentifier;

interface FindByEmail
{
    public function find(StringIdentifier $stringIdentifier): User;
}
