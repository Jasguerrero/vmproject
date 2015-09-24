<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['description_es','description_en','img_url'];

    public function setImgUrlAttribute($img_url)
    {
        $name = Carbon::now()->second.$img_url->getClientOriginalName();
        $this->attributes['img_url'] = $name;
        \Storage::disk('local')->put($name,\File::get($img_url));
    }

    public function dishes(){
        return $this->hasMany('App\Dish');
    }

    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
