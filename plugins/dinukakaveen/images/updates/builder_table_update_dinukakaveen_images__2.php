<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDinukakaveenImages2 extends Migration
{
    public function up()
    {
        Schema::table('dinukakaveen_images_', function($table)
        {
            $table->renameColumn('category_id', 'categories_id');
        });
    }
    
    public function down()
    {
        Schema::table('dinukakaveen_images_', function($table)
        {
            $table->renameColumn('categories_id', 'category_id');
        });
    }
}
