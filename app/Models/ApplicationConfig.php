<?php

namespace App\Models;

use BasicApp\Core\DatabaseConfig;

class ApplicationConfig extends DatabaseConfig
{

    public $background_image;

    public function getBackgroundImageUrl()
    {
        if (!$this->background_image)
        {
            return null;
        }

        return base_url('uploaded/application/' . $this->background_image);
    }

}