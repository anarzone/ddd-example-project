<?php

declare(strict_types=1);

namespace TradeNetwork\Applicaion\Company;

use App\Enums\User\Auth\Status;
use Illuminate\Http\Response;

class GetCompanyHandler
{
    public function getCompany(GetCompanyCommand $command): Response
    {
        $company = $command->getCompany();

        return new Response([
            'data' => [
                'id' => $company->id,
                'name' => $company->name
            ]
        ]);
    }
}
