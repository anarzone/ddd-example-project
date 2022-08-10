<?php

declare(strict_types=1);

namespace TradeNetwork\Applicaion\Company;

class GetPartnersHandler
{
    public function getPartners(GetCompanyCommand $command){
        $company = $command->getCompany();

        return response([
            'data' => [
                'partners' => $company->partnerCompanies, // this could be replaced by resource/collection
            ],
        ]);
    }
}
