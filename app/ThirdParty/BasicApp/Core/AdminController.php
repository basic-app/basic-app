<?php

namespace BasicApp\Core;

use CodeIgniter\Events\Events;
use Config\Services;
use StdClass;

class AdminController extends BaseAdminController
{

    public function __construct()
    {
        parent::__construct();

        $view = Services::renderer();

        // main menu

        $mainMenu = new StdClass;

        $mainMenu->items = [];

        Events::trigger('admin_main_menu', $mainMenu);

        $view->setVar('mainMenu', $mainMenu->items);

        // options menu

        $optionsMenu = new StdClass;

        $optionsMenu->items = [];

        Events::trigger('admin_options_menu', $optionsMenu);

        $view->setVar('optionsMenu', $optionsMenu->items);        
    }

}