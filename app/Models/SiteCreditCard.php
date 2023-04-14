<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCreditCard extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
    }
}
