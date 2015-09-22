<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['description_es','description_en'];

    public function dishes(){
        return $this->hasMany('App\Dish');
    }

    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
