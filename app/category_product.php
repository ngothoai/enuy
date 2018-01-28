<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_product extends Model
{
    protected $table = 'category_product';
    public $guard = [];
    public function Product(){
        return $this->hasMany('App\Product','idcat','id');
    }
    public function parent()
    {
        return $this->belongsTo('App\category_product', 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\category_product', 'parent_id','id');
    }
}
