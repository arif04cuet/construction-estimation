<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArifEstimatorCompanies2 extends Migration
{
    public function up()
    {
        Schema::table('arif_estimator_companies', function($table)
        {
            $table->renameColumn('user_id', 'owner_id');
        });
    }
    
    public function down()
    {
        Schema::table('arif_estimator_companies', function($table)
        {
            $table->renameColumn('owner_id', 'user_id');
        });
    }
}
