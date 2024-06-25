<?php namespace DinukaKaveen\Users\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDinukakaveenUsers extends Migration
{
    public function up()
    {
        Schema::create('dinukakaveen_users_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('email', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dinukakaveen_users_');
    }
}
