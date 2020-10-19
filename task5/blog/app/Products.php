<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
        "title", "text", "short_description", "img_url"
    ]; 
}
