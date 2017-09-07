<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceSierraCars3 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->text('year');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->dropColumn('year');
        });
    }
}
