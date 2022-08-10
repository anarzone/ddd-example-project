<?php

declare(strict_types=1);

namespace TradeNetwork\Infrastructure\Persistence\Database\ReadModel\Company;

use App\Models\Company;
use TradeNetwork\Domain\Value\IntegerIdentifier;
use TradeNetwork\Domain\ReadModel\Company\FindByUserId as FindByUserIdInterface;

class FindByUserId implements FindByUserIdInterface
{
    public function find(IntegerIdentifier $integerIdentifier): Company
    {
        return Company::where('id', $integerIdentifier->asInt())->first();
    }
}
