<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '',
    'description' => '',
    'category' => 'misc',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'in2code GmbH',
    'author_email' => 'service@in2code.de',
    'author_company' => 'in2code GmbH',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.99.99',
            'php' => '7.4.0-8.0.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
