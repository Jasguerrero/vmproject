<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['comments', 'status', 'payment_method'];

    public function owner()
    {
        return $this -> belongsTo('App\Guest');
    }
    public function dishes()
    {
        return $this -> hasMany('App\Dish');
    }
}
