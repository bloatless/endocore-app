<?php
/**
 * This is were you define all your applications routes. Every route needs an action as a handler.
 * The corresponding actions can be found in the "app/Actions" folder.
 */
return [
    // A GET route for the path "/" (your homepage).
    'home' => [
        'method' => 'GET',
        'pattern' => '/',
        'handler' => 'Bloatless\EndocoreApp\Actions\HomeAction',
    ],

    // Another GET route (Path: /json-demo)
    'json' => [
        'method' => 'GET',
        'pattern' => '/json-demo',
        'handler' => 'Bloatless\EndocoreApp\Actions\JsonDemoAction'
    ],

    //Example of a POST route:
    'create_contact' => [
        'method' => 'POST',
        'pattern' => '/contact',
        'handler' => 'Bloatless\EndocoreApp\Actions\CreateContactAction'
    ],

    // Example of a PUT route:
    'update_contact' => [
        'method' => 'PUT',
        'pattern' => '/contact',
        'handler' => 'Bloatless\EndocoreApp\Actions\UpdateContactAction'
    ]
];
