<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function slogan()
    {
        return $this->belongsTo(Slogan::class);
    }

    public function tagLine()
    {
        return $this->belongsTo(TagLine::class);
    }

    public function aboutUsTitle()
    {
        return $this->belongsTo(AboutUsTitle::class);
    }

    public function aboutUsDescription()
    {
        return $this->belongsTo(AboutUsDescription::class);
    }

    public function shopTitle()
    {
        return $this->belongsTo(ShopTitle::class);
    }

    public function buttonName()
    {
        return $this->belongsTo(ButtonName::class);
    }

    public function popularTitle()
    {
        return $this->belongsTo(PopularTitle::class);
    }

    public function contactTitle()
    {
        return $this->belongsTo(ContactTitle::class);
    }

    public function contactContent()
    {
        return $this->belongsTo(ContactContent::class);
    }
}
