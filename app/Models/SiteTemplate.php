<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteTemplate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function headerTemplate()
    {
        return $this->belongsTo(HeaderTemplate::class)->withTrashed();
    }

    public function footerTemplate()
    {
        return $this->belongsTo(FooterTemplate::class)->withTrashed();
    }

    public function heroSection()
    {
        return $this->belongsTo(HeroSection::class)->withTrashed();
    }

    public function aboutSection()
    {
        return $this->belongsTo(AboutSection::class)->withTrashed();
    }
}
