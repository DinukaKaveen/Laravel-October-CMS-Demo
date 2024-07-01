<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDinukakaveenImagesCategories2 extends Migration
{
    public function up()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->string('description', 255);
        });
    }
    
    public function down()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
