<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';
    protected $fillable = ['name', 'description_es','description_en', 'img_url','price','measure','prep_time'];
    public function category()
    {
        return $this -> belongsTo('App\Category');
    }
    public function orders(){
        return $this -> hasMany('App\Order');
    }

    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
