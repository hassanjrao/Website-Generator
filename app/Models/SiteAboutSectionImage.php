<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteAboutSectionImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
