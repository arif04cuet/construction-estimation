<?php

namespace Arif\Estimator\Controllers;

use Arif\Estimator\Models\Company;
use Backend\Classes\Controller;
use Backend\Facades\BackendAuth;
use BackendMenu;

class Companies extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $raltionConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'manage_company'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Arif.Estimator', 'main-menu-item');

        if (!BackendAuth::getUser()->isSuperUser() && $this->action == 'update') {
            $this->requiredPermissions[] = 'access_my_company';
        }
    }

    public function relationExtendConfig($config, $field, $model)
    {

        if (!$model instanceof Company || $field != 'owner')
            return;

        if (!BackendAuth::getUser()->isSuperUser())
            $config->view['toolbarButtons'] = [];
    }

    public function formExtendQuery($query)
    {
        $user = BackendAuth::getUser();

        if (!$user->isSuperUser())
            $query->where('id', $user->company->id);
    }
}
