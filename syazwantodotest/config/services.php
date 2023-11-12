<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '862458545515509',
        'client_secret' => '994c9f6d7dcba758b16dc7acd5acdf9c',
        // 'redirect' => 'http://localhost:8000/auth/facebook/callback',
        'redirect' => '/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '163286383435-fc9doivtg1tf70l7rljuruhv48sdoov9.apps.googleusercontent.com',
        'client_secret' => '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',
        // 'redirect' => 'http://localhost:8000/auth/google/callback',
        'redirect' => '/auth/google/callback',
    ],

    'github' => [
        'client_id' => '2c38995fa32ab0a852d7',
        'client_secret' => 'c55089a401bdca7a42cbcaf2a706322e32f85a64',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

];
