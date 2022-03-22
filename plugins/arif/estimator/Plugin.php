<?php

namespace Arif\Estimator;

use Arif\Estimator\Models\Company;
use Backend\Facades\BackendAuth;
use System\Classes\PluginBase;
use Event;
use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        \Backend\Models\User::extend(function ($model) {
            $model->hasOne['company'] = [Company::class, 'key' => 'owner_id'];
        });

        //add my company menu as Main menu item
        $this->addMyCompanyMenu();
    }

    public function addMyCompanyMenu()
    {
        Event::listen('backend.menu.extendItems', function ($navigationManager) {

            if (!BackendAuth::getUser()->isSuperUser()) {
                $company = BackendAuth::getUser()->company;

                $myCompanyMenu = [
                    'blog' => [
                        'label'       => 'My Company',
                        'url'         => Backend::url('arif/estimator/companies/update/' . $company->id),
                        'icon'        => 'icon-pencil',
                        'permissions' => ['access_my_company'],
                        'order'       => 500,
                    ]
                ];

                $navigationManager->addMainMenuItems('Arif.Estimator', $myCompanyMenu);
            }
        });
    }
}
