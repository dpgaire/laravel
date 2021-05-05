<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   protected $fillable=['pname','price'];
    public $timestamps=false;
}
