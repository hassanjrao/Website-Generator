<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productShopOptions()
    {
        return $this->hasMany(ProductShopOption::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function billingModel()
    {
        return $this->belongsTo(BillingModel::class);
    }
}
