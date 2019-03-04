<?php
/**
 * This is your applications configuration file.
 * Please check if you need to adjust these settings (e.g. the database configuration).
 */

return [
    'logger' => [
        'path_logs' => __DIR__ . '/../logs',
        'min_level' => 'warning',
    ],

    'templating' => [
        'path_views' => __DIR__ . '/../resources/views',
        'path_layouts' => __DIR__ . '/../resources/views/layouts',
    ],

    // If you want to use a MySQL database, you need to adjust these settings:
    'db' => [
        'connections' => [
            'db1' => [ // name of your database connection
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'db1',
                'username' => 'root',
                'password' => 'your-password',
                'charset' => 'utf8', // Optional
                'timezone' => 'Europe/Berlin', // Optional
            ],

            // add as many connections as you need...
        ],

        'default_connection' => 'db1',
    ],
];
