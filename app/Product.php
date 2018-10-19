<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function bill_detail()
    {
    	return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }

    public function type_product()
    {
    	return $this->belongsTo('App\TypeProduct', 'id_type', 'id');
    }
}
