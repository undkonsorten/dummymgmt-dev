<?php

/**
 * Extension Manager/Repository config file for ext "dummymgmt_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Dummymgmt Site',
    'description' => 'Site package to test bidirectional relations in TYPO3 extension.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Undkonsorten\\DummymgmtSite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Karsten Nowak',
    'author_email' => 'nowak@undkonsorten.com',
    'author_company' => 'undkonsorten',
    'version' => '1.0.0',
];
