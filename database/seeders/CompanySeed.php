<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ownCompany = Company::create(['name' => 'X']);
        $company1 = Company::create(['name' => 'Next']);
        $company2 = Company::create(['name' => 'Next']);

        $user = User::updateOrCreate([
            'name' => 'Anar',
            'email' => 'test@test.com',
            'password' => Hash::make('12345678'),
            'company_id' => $ownCompany->id
        ]);

        $ownCompany->partnerCompanies()->attach($company1);
        $ownCompany->partnerCompanies()->attach($company2);
        $company1->partnerCompanies()->attach($company2);
    }
}
