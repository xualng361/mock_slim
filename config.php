<?php

$config = [
    'debug' => true,
    'siteURI' => 'http://localhost',
    'settings' => [
        'db' => [
            'host' => '127.0.0.1',
            'user' => 'mock_rw',
            'pass' => '123456',
            'name' => 'mock'
        ],
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
//        'routerCacheFile' => ROOT . '/cache/router.cache.php',

        'logger' => [
            'name' => 'app',
            'path' => ROOT . '/logs/app.log',
            'level' => \Monolog\Logger::INFO // set to ERROR in production
        ],

        'twig' => [
            'settings' => [
                'debug' => true,
                'cache' => ROOT . '/cache',
            ],
            'template' => ROOT . '/template'
        ],
    ]
];