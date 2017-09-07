<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceSierraContacts extends Migration
{
    public function up()
    {
        Schema::create('andresalice_sierra_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->text('message');
            $table->text('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_sierra_contacts');
    }
}
