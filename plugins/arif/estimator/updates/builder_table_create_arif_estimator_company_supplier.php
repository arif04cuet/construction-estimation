<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArifEstimatorCompanySupplier extends Migration
{
    public function up()
    {
        Schema::create('arif_estimator_company_supplier', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->bigInteger('company_id');
            $table->bigInteger('supplier_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arif_estimator_company_supplier');
    }
}
