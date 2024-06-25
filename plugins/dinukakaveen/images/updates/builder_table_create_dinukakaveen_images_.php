<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDinukakaveenImages extends Migration
{
    public function up()
    {
        Schema::create('dinukakaveen_images_', function($table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 255);
            $table->string('description', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dinukakaveen_images_');
    }
}
