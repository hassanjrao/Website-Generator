<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProductCategory extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
