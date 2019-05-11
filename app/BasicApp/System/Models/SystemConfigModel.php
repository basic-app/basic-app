<?php

namespace BasicApp\System\Models;

class SystemConfigModel extends BaseSystemConfigModel
{

    public static function themeListItems()
    {
        return [
            'Theme\CleanBlog' => 'Clean Blog (by StartBootstrap)'
        ];
    }

    public static function adminThemeListItems()
    {
        return [
            'Theme\CoolAdmin' => 'Cool Admin (by ColorLib)'
        ];
    }

}