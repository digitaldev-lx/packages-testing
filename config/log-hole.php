<?php

return [
    'database' => [
        'driver' => 'custom',
        'via' => DigitalDevLx\LogHole\Channels\DatabaseChannel::class,
        'level' => env('LOG_LEVEL', 'debug'),
        'table' => 'logs_hole',
    ],

    'redis' => [
        'driver' => 'custom',
        'via' => DigitalDevLx\LogHole\Channels\RedisChannel::class,
        'level' => env('LOG_LEVEL', 'debug'),
        'connection' => env('REDIS_LOG_CONNECTION', 'default'),
        'key' => env('REDIS_LOG_KEY', 'logs'),
        'cap_size' => env('REDIS_LOG_CAP_SIZE', 0),
    ],
];
