<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDinukakaveenImagesCategories3 extends Migration
{
    public function up()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->string('description', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->string('description', 255)->nullable(false)->change();
        });
    }
}
