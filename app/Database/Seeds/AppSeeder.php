<?php

namespace App\Database\Seeds;

use Exception;
use BasicApp\Config\Models\ConfigModel;
use BasicApp\Site\Config\Site as SiteConfig;
use BasicApp\CleanBlogTheme\Theme as CleanBlogTheme;

class AppSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $model = new ConfigModel;

        $model->setValue(SiteConfig::class, 'theme', CleanBlogTheme::class);
    }

}