<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     protected $fillable = ['Prod_Name','Prod_Price','Prod_img'];
    protected $table = 'Carts';
}
