<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use TradeNetwork\Applicaion\Company\GetCompanyCommand;
use TradeNetwork\Applicaion\Company\GetPartnersHandler;
use TradeNetwork\Domain\Value\IntegerIdentifier;
use TradeNetwork\Infrastructure\Persistence\Database\ReadModel\Company\FindByUserId;

class CompanyController extends Controller
{
    public function getPartners(){
        $findByUserId = new FindByUserId();
        $company = $findByUserId->find(IntegerIdentifier::createFromInteger(auth()->user()->id));
        $command = new GetCompanyCommand($company);
        $handler = new GetPartnersHandler();

        return $handler->getPartners($command);
    }
}
