<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';

    protected $fillable = array('name');

    public static $rules = ['name' => 'required|min:3'];

    public function subcategory()
    {
        return $this->hasMany('App\Subcategory');
    }

}