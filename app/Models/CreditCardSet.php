<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardSet extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function creditCardSetItems()
    {
        return $this->hasMany(CreditCardSetItem::class);
    }
}
