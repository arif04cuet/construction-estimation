<?php

namespace Arif\Estimator\Models;

use Backend\Facades\BackendAuth;
use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'arif_estimator_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $belongsTo = [
        'company' => Company::class
    ];

    public function beforeCreate()
    {
        $this->company = BackendAuth::getUser()->company;
    }
}
