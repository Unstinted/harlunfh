<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model {

    protected $table = 'designer';

    protected $fillable = array('firstname', 'lastname', 'brand_name', 'address', 'city', 'state','country', 'insta_handle',
        'twitter_handle', 'facebook_handle', 'email', 'phone_no', 'mobile_no');

    public static $rules = [
        'firstname' => 'required|min:3',
        'lastname' => 'required|min:3',
        'brand_name' => 'required|min:3',
        'address' => 'required|min:3',
        'city' => 'required|min:3',
        'state' => 'required|min:3',
        'country'=> 'required|min:3',
        'insta_handle' => 'required|min:3|unique:designer',
        'twitter_handle' => 'required|min:3|unique:designer',
        'facebook_handle' => 'required|min:3|unique:designer',
        'email' => 'required|email|unique:designer',
        'phone_no' => 'required|numeric|max:11',
        'mobile_no' => 'required|numeric|max:11',
    ];

}