<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTemplate extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected function fileName(): Attribute{
        return Attribute::make(
            get : function(){
                $fileArr=explode("/",$this->file);
                return $fileArr[count($fileArr)-1];
            }
        );
    }


}
