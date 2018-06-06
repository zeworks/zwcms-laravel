<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    protected $fillable = [
        'title','status','featured_image'
    ];    

}
