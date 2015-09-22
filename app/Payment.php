<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'description_es',
        'description_en'
    ];

    /** adminside **/
    public function owner(){
        return $this->belongsTo('App\User');
    }
}
