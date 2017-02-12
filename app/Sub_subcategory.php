<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_subcategory extends Model {

    protected $table = 'sub_subcategory';

    protected $fillable = array('name', 'subcat_id');

    public static $rules = ['name' => 'required|min:3',
        'subcat_id' => 'required|integer'];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

}