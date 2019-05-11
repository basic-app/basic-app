<?php

namespace App\Hooks;

use PHPTheme;

class Layout
{

    public static function head()
    {
        // TEMP

        if (PHPTheme::$path == 'components/CoolAdmin')
        {
            echo view('admin/layout-head');
        }
        else
        {
            echo view('layout-head');
        }
    }

    public static function bodyBegin()
    {
        // TEMP

        if (PHPTheme::$path == 'components/CoolAdmin')
        {
            echo view('admin/layout-body-begin');
        }
        else
        {
            echo view('layout-body-begin');
        }
    }

    public static function bodyEnd()
    {
        // TEMP

        if (PHPTheme::$path == 'components/CoolAdmin')
        {
            echo view('admin/layout-body-end');
        }
        else
        {
            echo view('layout-body-end');
        }
    }

}