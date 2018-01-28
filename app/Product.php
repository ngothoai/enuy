<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imgProduct' , 'title' , 'description' , 'price'];
    public function category_product(){
        return $this->belongsTo('App\category_product','idcat','id');
    }
}
