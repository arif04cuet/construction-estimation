<?php

namespace Arif\Estimator\Models;

use Model;

/**
 * Model
 */
class Supplier extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'arif_estimator_suppliers';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'mobile' => 'required',
        'address' => 'required'
    ];

    public $belongsToMany = [
        'companies' => [Company::class, 'table' => 'arif_estimator_company_supplier']
    ];
}
