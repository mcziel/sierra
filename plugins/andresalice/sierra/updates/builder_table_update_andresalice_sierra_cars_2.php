<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceSierraCars2 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->double('price', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
