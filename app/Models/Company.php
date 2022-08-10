<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function ownCompanies()
    {
        return $this->belongsToMany(Company::class, TradeRelationship::class, 'own_company_id', 'partner_company_id');
    }

    public function partnerCompanies()
    {
        return $this->belongsToMany(Company::class, TradeRelationship::class, 'partner_company_id', 'own_company_id');
    }
}
