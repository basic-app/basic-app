<?php

namespace App\Models;

use BasicApp\Behaviors\UploadBehavior;

class AppConfigModel extends \BasicApp\Config\BaseConfigForm
{

    protected $returnType = AppConfig::class;

    protected $validationRules = [
        'background_image_file' => 'uploaded[background_image_file]|max_size[background_image_file,3024]|ext_in[background_image_file,jpg,png,gif]|is_image[background_image_file]|permit_empty'
    ];

    protected $fieldLabels = [
        'background_image_file' => 'Background Image'
    ];

    protected $allowedFields = [
        'background_image'
    ];

    protected $languageCategory = 'App';

    public function behaviors() : array
    {
        return [
            [
                'class' => UploadBehavior::class, 
                'path' => FCPATH . 'uploaded/app',
                'field' => 'background_image',
                'input' => 'background_image_file',
                'square' => false
            ]
        ];
    }

    public function renderForm($form, $data)
    {
        $return = '';

        $url = $data->getBackgroundImageUrl();

        $return .= $form->uploadImageGroup($data, 'background_image_file', $url);

        return $return;
    }

}