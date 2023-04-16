<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardSetItem extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function creditCardSet()
    {
        return $this->belongsTo(CreditCardSet::class);
    }
}
