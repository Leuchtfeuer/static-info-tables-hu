<?php

$EM_CONF['static_info_tables_hu'] = [
    'title' => 'Static Info Tables (hu)',
    'description' => 'Hungarian (hu) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '7.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Max Rösch',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'php' => '7.2.0-7.4.99',
            'static_info_tables' => '6.7.3-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Leuchtfeuer\\StaticInfoTablesHu\\' => 'Classes',
        ],
    ],
];
