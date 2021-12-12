<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'site-package',
    'description' => 'Dies ist die Beschreibung des site-package',
    'category' => 'frontend',
    'author' => 'Sascha Nabrotzky',
    'author_email' => 'sascha.nabrotzky@online.de',
    'author_company' => 'Sascha Nabrotzky',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];