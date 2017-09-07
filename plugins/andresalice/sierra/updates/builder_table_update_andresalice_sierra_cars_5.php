<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceSierraCars5 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->dropColumn('make_id');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->integer('make_id');
        });
    }
}
