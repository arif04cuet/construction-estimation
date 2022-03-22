<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArifEstimatorSuppliers extends Migration
{
    public function up()
    {
        Schema::table('arif_estimator_suppliers', function($table)
        {
            $table->dropColumn('company_id');
        });
    }
    
    public function down()
    {
        Schema::table('arif_estimator_suppliers', function($table)
        {
            $table->bigInteger('company_id');
        });
    }
}
