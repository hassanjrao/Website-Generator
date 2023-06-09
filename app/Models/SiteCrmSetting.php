<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCrmSetting extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function advertisingCompany()
    {
        return $this->belongsTo(AdvertisingCompany::class);
    }

    public function crm()
    {
        return $this->belongsTo(Crm::class);
    }
}
