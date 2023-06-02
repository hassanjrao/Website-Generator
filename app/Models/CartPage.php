<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartPage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected function fileName(): Attribute
    {
        return Attribute::make(
            get: function () {
                $fileArr = explode("/", $this->file);
                return $fileArr[count($fileArr) - 1];
            }
        );
    }
}
