<?php

declare(strict_types=1);

namespace TradeNetwork\Applicaion\Company;

use App\Models\Company;

class GetCompanyCommand
{
    public function __construct(public Company $company)
    {
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }
}
