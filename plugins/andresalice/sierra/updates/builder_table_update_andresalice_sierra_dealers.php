<?php namespace Andresalice\Sierra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceSierraDealers extends Migration
{
    public function up()
    {
        Schema::table('andresalice_sierra_dealers', function($table)
        {
            $table->text('phone');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_sierra_dealers', function($table)
        {
            $table->dropColumn('phone');
        });
    }
}
