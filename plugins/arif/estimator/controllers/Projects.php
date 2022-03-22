<?php

namespace Arif\Estimator\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendAuth;
use BackendMenu;

class Projects extends Controller
{
    public $implement = ['Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_projects'
    ];

    public function __construct()
    {

        parent::__construct();
        BackendMenu::setContext('Arif.Estimator', 'main-menu-item2', 'side-menu-item');
    }
}
