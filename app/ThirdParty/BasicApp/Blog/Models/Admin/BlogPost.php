<?php

namespace BasicApp\Blog\Models\Admin;

use BasicApp\HtmlPurifier\HtmlPurifierEntityBehavior;

class BlogPost extends BaseBlogPost
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'htmlPurifier' => [
                'class' => HtmlPurifierEntityBehavior::class,
                'attributes' => [
                    'post_text'
                ]
            ]
        ]);
    }

}