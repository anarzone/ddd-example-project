<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use TradeNetwork\Applicaion\Company\GetCompanyCommand;
use TradeNetwork\Applicaion\Company\GetCompanyHandler;
use TradeNetwork\Domain\Value\IntegerIdentifier;
use TradeNetwork\Infrastructure\Persistence\Database\ReadModel\Company\FindByUserId;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function getCompany(): Response
    {
        $findByUserId = new FindByUserId();
        $company = $findByUserId->find(IntegerIdentifier::createFromInteger(auth()->user()->id));
        $command = new GetCompanyCommand($company);
        $handler = new GetCompanyHandler();

        return $handler->getCompany($command);
    }
}
