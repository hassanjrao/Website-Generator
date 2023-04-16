<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePageLayout extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function pageLayout()
    {
        return $this->belongsTo(PageLayout::class);
    }


}
