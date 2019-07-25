<?php

namespace App\Models;

use BasicApp\Configs\DatabaseConfig;

class ApplicationConfig extends DatabaseConfig
{

    public $background_image;

    public $modelClass = ApplicationConfigModel::class;

    public function getBackgroundImageUrl()
    {
        if (!$this->background_image)
        {
            return null;
        }

        return base_url('uploaded/application/' . $this->background_image);
    }

}