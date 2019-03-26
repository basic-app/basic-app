<?php

namespace App\Models;

use BasicApp\Core\DatabaseConfigModel;
use BasicApp\Behaviors\UploadModelBehavior;

class ApplicationConfigModel extends DatabaseConfigModel
{

    protected $returnType = ApplicationConfig::class;

    protected $validationRules = [
        'background_image_file' => 'uploaded[background_image_file]|max_size[background_image_file,3024]|ext_in[background_image_file,jpg,png,gif]|is_image[background_image_file]'
    ];

    protected $labels = [
        'background_image_file' => 'Background Image'
    ];

    protected $translations = 'application';

    public function beforeValidate(array $params) : array
    {
        if (!array_key_exists('background_image_file', $_FILES))
        {
            unset($params['validationRules']['background_image_file']); 
        }

        return parent::beforeValidate($params);
    }

    public function behaviors() : array
    {
        return [
            [
                'class' => UploadModelBehavior::class, 
                'path' => FCPATH . 'uploaded/application',
                'field' => 'background_image',
                'input' => 'background_image_file',
                'square' => false
            ]
        ];
    }

    public static function getFormName()
    {
        return t('admin.menu', 'Application');
    }

    public static function getFormFields($model)
    {
        return [
            [
                'type' => 'image',
                'name' => 'background_image_file',
                'url' => $model->getBackgroundImageUrl(),
                'label' => static::label('background_image_file')
            ]
        ];
    }

}