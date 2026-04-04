<?php

namespace App\Cells;

use BasicApp\AdminThemeSbAdmin\Cells\AdminCell as BaseAdminCell;

class AdminCell extends BaseAdminCell
{
    public function test(array $params = []) : string
    {
        return 'test';
    }
}