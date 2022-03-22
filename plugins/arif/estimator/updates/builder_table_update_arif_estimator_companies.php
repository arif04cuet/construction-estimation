<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArifEstimatorCompanies extends Migration
{
    public function up()
    {
        Schema::table('arif_estimator_companies', function($table)
        {
            $table->bigInteger('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('arif_estimator_companies', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
