<?php namespace Arif\Estimator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArifEstimatorConstructionTypies extends Migration
{
    public function up()
    {
        Schema::create('arif_estimator_construction_typies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arif_estimator_construction_typies');
    }
}
