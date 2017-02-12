<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('brand_name');
            $table->string('address');
            $table->string('city');
            $table->string('state') ;
            $table->string('country');
            $table->string('insta_handle');
            $table->string('twitter_handle');
            $table->string('facebook_handle');
            $table->string('email');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designer');
    }
}
