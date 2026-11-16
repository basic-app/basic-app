<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'trailing_comma_in_multiline' => false,
        'braces' => [
            'allow_single_line_closure' => false,
            'position_after_functions_and_oop_constructs' => 'next'
        ],
        'single_line_empty_body' => false
    ])
    ->setFinder(
        (new Finder())
            ->in([
                __DIR__,
                __DIR__ . '/vendor/basic-app'
            ])
            ->notPath('#/Views/#')
    );