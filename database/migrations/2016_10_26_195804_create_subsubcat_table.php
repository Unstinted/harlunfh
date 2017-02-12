<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsubcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_subcategory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('id')->on('subcategory')
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
        Schema::drop('sub_subcategory');
    }
}
