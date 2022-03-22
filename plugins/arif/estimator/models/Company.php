<?php

namespace Arif\Estimator\Models;

use Backend\Models\User;
use Model;
use System\Models\File;

/**
 * Model
 */
class Company extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'arif_estimator_companies';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name',
        'address'
    ];

    public $belongsTo = [
        'owner' => User::class
    ];

    public $belongsToMany = [
        'suppliers' => [Supplier::class, 'table' => 'arif_estimator_company_supplier']
    ];

    public $hasMany = [
        'employees' => User::class
    ];

    public $attachOne = [
        'company_logo' => File::class
    ];
}
