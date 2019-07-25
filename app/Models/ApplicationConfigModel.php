<?php

namespace App\Models;

use BasicApp\Behaviors\UploadBehavior;

class ApplicationConfigModel extends \BasicApp\Configs\DatabaseConfigForm
{

    protected $returnType = ApplicationConfig::class;

    protected $validationRules = [
        'background_image_file' => 'uploaded[background_image_file]|max_size[background_image_file,3024]|ext_in[background_image_file,jpg,png,gif]|is_image[background_image_file]|permit_empty'
    ];

    protected $labels = [
        'background_image_file' => 'Background Image'
    ];

    protected $translations = 'application';

    /*
    public function beforeValidate(array $params) : array
    {
        if (!array_key_exists('background_image_file', $_FILES))
        {
            unset($params['validationRules']['background_image_file']); 
        }

        return parent::beforeValidate($params);
    }
    */

    public function behaviors() : array
    {
        return [
            [
                'class' => UploadBehavior::class, 
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

    public function renderFields($form)
    {
        $return = '';

        $url = $form->model->getBackgroundImageUrl();

        $return .= $form->imageUpload('background_image_file', $url);

        return $return;
    }

}