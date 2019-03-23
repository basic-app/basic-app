<?php

namespace App\Hooks;

class Admin
{

    public static function optionsMenu($event)
    {
        $modelClass = 'App\Models\ApplicationConfigModel';

        $event->items[$modelClass] = [
            'label' => $modelClass::getFormName(),
            'icon' => 'fa fa-desktop',
            'url' => classic_url('admin/config', ['class' => $modelClass])
        ];
    }

}