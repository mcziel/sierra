<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceSierraCars extends Migration
{
    public function up()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->text('description');
            $table->text('accesories');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_sierra_cars', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('accesories');
        });
    }
}
