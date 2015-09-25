<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = ['dish_id'];

    public function owner()
    {
        return $this -> belongsTo('App\User');
    }
    public function dishes()
    {
        return $this ->hasMany('App\Dish');
    }
}
