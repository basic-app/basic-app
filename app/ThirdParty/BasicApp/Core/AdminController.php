<?php

namespace BasicApp\Core;

use Config\Services;
use StdClass;
use PHPTheme;

class AdminController extends BaseAdminController
{

    public function __construct()
    {
        parent::__construct();

        $view = Services::renderer();

        // main menu

        $mainMenu = new StdClass;

        $mainMenu->items = [];

        PHPTheme::trigger('admin_main_menu', $mainMenu);

        $view->setVar('mainMenu', $mainMenu->items);

        // options menu

        $optionsMenu = new StdClass;

        $optionsMenu->items = [];

        PHPTheme::trigger('admin_options_menu', $optionsMenu);

        $view->setVar('optionsMenu', $optionsMenu->items);        
    }

}