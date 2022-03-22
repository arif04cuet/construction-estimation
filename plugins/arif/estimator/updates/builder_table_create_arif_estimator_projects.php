<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArifEstimatorProjects extends Migration
{
    public function up()
    {
        Schema::create('arif_estimator_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('address');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->bigInteger('company_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arif_estimator_projects');
    }
}
