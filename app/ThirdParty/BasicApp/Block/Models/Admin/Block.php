<?php

namespace BasicApp\Block\Models\Admin;

use BasicApp\HtmlPurifier\HtmlPurifierEntityBehavior;

class Block extends BaseBlock
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'htmlPurifier' => [
                'class' => HtmlPurifierEntityBehavior::class,
                'attributes' => [
                    'block_content'
                ]
            ]
        ]);
    }

}