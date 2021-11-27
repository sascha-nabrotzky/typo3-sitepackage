<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Text',
    'description' => 'Neues Text-Element',
    'category' => 'frontend',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'author' => 'Sascha Nabrotzky',
    'author_email' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5-11.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
