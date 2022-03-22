<?php namespace Arif\Estimator\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ConstructionTypes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_construction_type' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Arif.Estimator', 'main-menu-item', 'side-menu-item');
    }
}
