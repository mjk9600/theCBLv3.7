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

    'google' => [
        'client_id' => '555637993310-ipquop0ptves38qpm19660nmm5tsshnm.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
        'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
        'redirect' => 'http://thecbl.in/google/callback'
        //'redirect' => 'http://localhost:8000/google/callback'
    ],
/*
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=thexx19cbl_cbl_demo
DB_USERNAME=thexx19cbl_cbl_demo
DB_PASSWORD=l.!2f9$Gj60S
*/

];
