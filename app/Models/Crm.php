<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crm extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    public function advertisingCompany(){
       return $this->belongsTo(AdvertisingCompany::class);
    }


    public function billingModel()
    {
        return $this->belongsTo(BillingModel::class);
    }
}
