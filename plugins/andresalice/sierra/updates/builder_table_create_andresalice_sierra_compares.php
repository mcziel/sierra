<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceSierraCompares extends Migration
{
    public function up()
    {
        Schema::create('andresalice_sierra_compares', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('ip');
            $table->integer('car_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_sierra_compares');
    }
}
