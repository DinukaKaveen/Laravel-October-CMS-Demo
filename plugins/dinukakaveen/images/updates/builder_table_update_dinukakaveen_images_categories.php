<?php namespace DinukaKaveen\Images\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDinukakaveenImagesCategories extends Migration
{
    public function up()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigIncrements('id')->nullable(false)->unsigned()->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dinukakaveen_images_categories', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->nullable(false)->unsigned()->default(null)->comment(null)->change();
        });
    }
}
