<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceSierraCars extends Migration
{
    public function up()
    {
        Schema::create('andresalice_sierra_cars', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('make_id');
            $table->integer('model_id');
            $table->text('kilometers');
            $table->text('type');
            $table->text('motor');
            $table->text('transmision');
            $table->text('exterior');
            $table->text('interior');
            $table->text('passengers');
            $table->text('doors');
            $table->text('gas');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_sierra_cars');
    }
}
