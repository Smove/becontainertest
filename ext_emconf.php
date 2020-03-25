<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'becontainertest',
    'description' => 'Some description',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'state' => 'stable',
    'internal' => '',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'extbase' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
