<?php

namespace App\Models;

class AppConfig extends \BasicApp\Config\BaseConfig
{

    public $background_image;

    public $modelClass = AppConfigModel::class;

    public function getBackgroundImageUrl()
    {
        if (!$this->background_image)
        {
            return null;
        }

        return base_url('uploaded/app/' . $this->background_image);
    }

}