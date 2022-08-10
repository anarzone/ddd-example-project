<?php

declare(strict_types=1);

namespace TradeNetwork\Domain\ReadModel\Company;

use App\Models\Company;
use TradeNetwork\Domain\Value\IntegerIdentifier;

interface FindByUserId
{
    public function find(IntegerIdentifier $integerIdentifier): Company;
}
