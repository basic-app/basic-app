<?php

namespace BasicApp\Site\Models\Admin;

use BasicApp\HtmlPurifier\HtmlPurifierEntityBehavior;

class Page extends BasePage
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'htmlPurifier' => [
                'class' => HtmlPurifierEntityBehavior::class,
                'attributes' => [
                    'page_text'
                ]
            ]
        ]);
    }

}