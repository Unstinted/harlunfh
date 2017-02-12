<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model {

    protected $table = 'subcategory';

    protected $fillable = array('name', 'cat_id');

    public static $rules = ['name' => 'required|min:3',
                            'cat_id' => 'required|integer'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->hasMany('App\Sub_subcategory');
    }

}