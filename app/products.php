<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
   protected $fillable = ['Product_name','price','image'];
    protected $table = 'products';
    public $primarykey = 'id';
    public $timestamps = false;
}
