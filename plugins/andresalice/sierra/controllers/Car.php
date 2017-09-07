<?php namespace Andresalice\Sierra\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Car extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'all' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Andresalice.Sierra', 'content', 'cars');
    }

    public function listExtendQuery($query, $definition) {
            return $query->withMakeName();
    }
}