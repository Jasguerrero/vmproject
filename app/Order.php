<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['dish_id','comments', 'status', 'payment_method'];

    public function owner()
    {
        return $this -> belongsTo('App\Guest');
    }
    public function dishes()
    {
        return $this -> belongsToMany('App\Dish');
    }
}
