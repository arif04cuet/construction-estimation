<?php

namespace Arif\Estimator\Models;

use Model;

/**
 * Model
 */
class ConstructionType extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'arif_estimator_construction_typies';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'code' => 'required|unique'
    ];
}
