<?php
/**
 * This is your applications configuration file.
 * Please check if you need to adjust these settings (e.g. the database configuration).
 */

return [
    // Paths to html templates, logfiles, ... (In most cases these dont need to be adjusted).
    'paths' => [
        'views' => __DIR__ . '/../resources/views',
        'layouts' => __DIR__ . '/../resources/views/layouts',
        'logs' => __DIR__ . '/../logs',
    ],

    'classes' => [
        // You can define your own template renderer here: (Normally this does not need to be changed)
        'html_renderer' => '\Nekudo\ShinyCore\Responder\PhtmlRenderer',
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

    'logger' => [
        // Here you can set the min. log level for your application:
        'min_level' => 'warning',
    ],
];
