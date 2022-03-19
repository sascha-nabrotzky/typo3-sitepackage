<?php

defined('TYPO3') || die();

// @see https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.6/Feature-75880-ImplementMultipleCroppingVariantsInImageManipulationTool.html

// Definition aller möglichen Crop-Varianten für Seiten- und CE-Eigenschaften
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = [
    'type' => 'imageManipulation',
    'allowedExtensions' => 'jpg,jpeg,png,svg',
    'cropVariants' => [
        'free' => [
            'title' => 'Free',
            'allowedAspectRatios' => [
                'free' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
            ],
        ],
        '1:1' => [
            'title' => 'Square (1:1)',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
            ],
        ],
        '16:9' => [
            'title' => '16:9',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '16:9',
                    'value' => 16 / 9
                ],
            ],
        ],
        '4:3' => [
            'title' => '4:3',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '4:3',
                    'value' => 4 / 3
                ],
            ],
        ],
        '3:2' => [
            'title' => '3:2',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
            ],
        ],
        '3:4' => [
            'title' => '3:4',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '3:4',
                    'value' => 3 / 4
                ],
            ],
        ],
        '2:3' => [
            'title' => '2:3',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '2:3',
                    'value' => 2 / 3
                ],
            ],
        ],
        'hero' => [
            'title' => 'Hero',
            'cropArea' => [
                'x' => 0,
                'y' => 0,
                'width' => 1,
                'height' => 1,
            ],
            'allowedAspectRatios' => [
                '1920:350' => [
                    'title' => '1920:350',
                    'value' => 1920 / 350
                ],
                'NaN' => [
                    'title' => 'free',
                    'value' => 0.0
                ],
            ],
        ],
    ]
];

# Modifikation der möglichen Crop-Varianten für das Feld Media bei den Seiteneigenschaften
$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'disabled' => true,
        ],
        'free' => [
            'disabled' => true,
        ],
//        '1:1' => [
//            'disabled' => true,
//        ],
//        '16:9' => [
//            'disabled' => true,
//        ],
        '4:3' => [
            'disabled' => true,
        ],
        '3:2' => [
            'disabled' => true,
        ],
        '3:4' => [
            'disabled' => true,
        ],
        '2:3' => [
            'disabled' => true,
        ]
    ],
    'filter' => [
        '0' => [
            'parameters' => [
                'allowedFileExtensions' => 'jpg,png,svg'
            ]
        ]
    ],
];
