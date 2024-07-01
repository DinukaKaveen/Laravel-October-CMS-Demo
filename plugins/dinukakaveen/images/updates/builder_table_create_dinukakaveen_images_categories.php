<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDinukakaveenImagesCategories extends Migration
{
    public function up()
    {
        Schema::create('dinukakaveen_images_categories', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('category');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dinukakaveen_images_categories');
    }
}
