<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration109 extends Migration
{
    public function up()
    {
         Schema::table('backend_users', function($table)
         {
             $table->bigInteger('company_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('backend_users', function($table)
         {
             $table->dropColumn('company_id');
        });
    }
}