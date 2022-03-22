<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArifEstimatorSuppliers extends Migration
{
    public function up()
    {
        Schema::create('arif_estimator_suppliers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('mobile');
            $table->text('address')->nullable();
            $table->bigInteger('company_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arif_estimator_suppliers');
    }
}
