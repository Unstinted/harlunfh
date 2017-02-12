<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model {

    protected $table = 'designs';

    protected $fillable = array('name', 'cat_id', 'subcat_id', 'sub_subcat_id', 'description','image', 'price',
        'availability', 'designer');

    public static $rules = [
        'name' => 'required|min:3',
        'cat_id' => 'required|integer',
        'subcat_id' => 'required|integer',
        'sub_subcat_id' => 'required|integer',
        'description' => 'required|min:3',
        'image'=> 'required|image|mimes:jpg,jpeg,bmp,png,gif',
        'price' => 'required|numeric',
        'avaiability' => 'integer',
        'designer' => 'required|integer',
    ];

}