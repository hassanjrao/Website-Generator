<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvertisingCompany extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function billingModel()
    {
        return $this->belongsTo(BillingModel::class);
    }
}
