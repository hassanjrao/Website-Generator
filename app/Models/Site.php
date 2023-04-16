<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');
    }

    public function deletedBy(){
        return $this->belongsTo(User::class,'deleted_by');
    }

    public function siteContent(){
        return $this->hasOne(SiteContent::class);
    }

    public function siteProductCategory(){
        return $this->hasOne(SiteProductCategory::class);
    }

    public function siteTemplate(){
        return $this->hasOne(SiteTemplate::class);
    }

    public function siteColorFont(){
        return $this->hasOne(SiteColorFont::class);
    }

    public function siteTermOther(){
        return $this->hasOne(SiteTermOther::class);
    }

    public function siteCreditCardSet(){
        return $this->hasOne(SiteCreditCard::class);
    }

    public function siteCrmSetting(){
        return $this->hasOne(SiteCrmSetting::class);
    }

    public function sitePageLayouts(){
        return $this->hasMany(SitePageLayout::class);
    }
}
