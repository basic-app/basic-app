<?php

namespace BasicApp\I18n\Models\Admin;

use BasicApp\HtmlPurifier\HtmlPurifierEntityBehavior;

class Translation extends BaseTranslation
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'htmlPurifier' => [
                'class' => HtmlPurifierEntityBehavior::class,
                'attributes' => [
                    'translation_value'
                ]
            ]
        ]);
    }

}