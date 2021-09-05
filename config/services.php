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
        'domain' => env('MAILGUN_DOMAIN','sandboxac1b07f7815440eea0fdca257eaf9195.mailgun.org'),
        'secret' => env('MAILGUN_SECRET','2bfad45356b7527f8ec6231fca5fba48-b6190e87-06bbce25'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.eu.mailgun.net'),
    ],


    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
