<?php

namespace App\Hooks;

class PreSystem
{

    public static function run()
    {
        require_once dirname(__DIR__) . '/BasicApp/Bootstrap.php';

        helper(['classic_url', 'theme', 'icon', 'user', 'trigger']);
    }

}