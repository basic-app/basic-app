<?php

namespace BasicApp\System\Models;

class SystemConfigModel extends BaseSystemConfigModel
{

    public static function themeListItems()
    {
        return [
            'components/startbootstrap-clean-blog' => 'Theme\CleanBlog'
        ];
    }

    public static function adminThemeListItems()
    {
        return [
            'components/CoolAdmin' => 'Theme\CoolAdmin'
        ];
    }

}