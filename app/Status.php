<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = ['description_es', 'description_en' ];


    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
