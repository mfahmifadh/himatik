<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = "post";
     protected $primary_key = "id";

     protected $fillable = [
        'id','title', 'filename','konten'
    ];

}
