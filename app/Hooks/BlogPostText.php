<?php

namespace App\Hooks;

use Michelf\MarkdownExtra;

class BlogPostText
{

    public static function run($event)
    {
        $parser = new MarkdownExtra;

        $event->post_text = $parser->transform($event->post_text);
    }

}