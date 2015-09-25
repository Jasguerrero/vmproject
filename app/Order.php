<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['payment_id','status_id','comments','cart_id'];

    public function owner()
    {
        return $this -> belongsTo('App\User');
    }
    public function dishes()
    {
        return $this -> belongsToMany('App\Dish');
    }
}
