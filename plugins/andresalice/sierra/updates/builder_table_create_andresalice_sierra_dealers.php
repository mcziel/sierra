<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceSierraDealers extends Migration
{
    public function up()
    {
        Schema::create('andresalice_sierra_dealers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->text('description');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_sierra_dealers');
    }
}
