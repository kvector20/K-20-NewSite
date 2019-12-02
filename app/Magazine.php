<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    //
    protected $fillable = [
        'title','body','author','img','collection_name','collection_month','views','published'
    ];
}
