<?php

return [
    'frontend' => [
        'extensions/middleware-name' => [
            'target' => \In2code\Extension\Middleware\NameMiddleware::class,
            'after' => [
                'typo3/cms-frontend/site',
            ],
            'before' => [
                'typo3/cms-frontend/eid'
            ]
        ],
    ],
];
