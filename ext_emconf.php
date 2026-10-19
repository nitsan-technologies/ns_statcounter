<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 StatCounter Plugin',
    'description' => 'Easily integrate StatCounter.com’s free real-time visitor tracking into your TYPO3 website. Access in-depth analytics and live stats effortlessly.',
    'category' => 'plugin',
    'author' => 'Team T3Planet',
    'author_email' => 'info@t3planet.de',
    'author_company' => 'T3Planet',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.5',
    'constraints' => [
        'depends' => [
            'typo3' => '6.0.0-11.5.99',
            'ns_license' => '14.5.4-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
