<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDinukakaveenImages extends Migration
{
    public function up()
    {
        Schema::table('dinukakaveen_images_', function($table)
        {
            $table->bigInteger('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('dinukakaveen_images_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
