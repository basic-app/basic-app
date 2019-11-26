<?php

namespace App\Config;

use BasicApp\Admin\Models\AdminModel;

class Admin extends \BasicApp\Admin\Config\BaseAdmin
{

    public $admins = [
        [
            'name' => 'admin',
            'password' => 'admin',
            'email' => 'admin@example.com',
            'avatar' => '/themes/colorlib-cool-admin/images/icon/avatar-01.jpg',
            'roles' => [AdminModel::ROLE_ADMIN]
        ]
    ];

}