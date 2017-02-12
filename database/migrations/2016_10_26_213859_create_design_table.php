<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('category')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('id')->on('subcategory')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sub_subcat_id')->unsigned();
            $table->foreign('sub_subcat_id')->references('id')->on('sub_subcategory')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
            $table->string('image');
            $table->integer('price');
            $table->integer('avaiability');
            $table->integer('designer')->unsigned();
            $table->foreign('designer')->references('id')->on('designer')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('design');
    }
}
