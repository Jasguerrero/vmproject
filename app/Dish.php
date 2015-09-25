<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Dish extends Model
{
    protected $table = 'dishes';
    protected $fillable = ['name','category_id', 'description_es',
        'description_en', 'img_url','price','measure','prep_time'];

    /* Mutador de imagenes */
    public function setImgUrlAttribute($img_url)
    {
        $name = Carbon::now()->second.$img_url->getClientOriginalName();
        $this->attributes['img_url'] = $name;
        \Storage::disk('local')->put($name,\File::get($img_url));
    }


    public function category()
    {
        return $this -> belongsToMany('App\Category');
    }
    public function orders(){
        return $this -> hasMany('App\Order');
    }

    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
