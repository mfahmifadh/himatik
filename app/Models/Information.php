<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
     
     protected $fillable = [
        'id','heading_infor', 'date', 'detail_infor',
    ];

}
