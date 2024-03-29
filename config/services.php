<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
        'webhook_uri' => env('GOOGLE_WEBHOOK_URI'),
        'scopes' => [
            // \Google_Service_Oauth2::USERINFO_EMAIL,
            \Google_Service_Calendar::CALENDAR,
            \Google_Service_People::USERINFO_PROFILE,
            \Google_Service_People::USERINFO_EMAIL,
            \Google_Service_people::CONTACTS_READONLY,
            
        ],
        'approval_prompt' => 'force',
        'access_type' => 'offline',
        'include_granted_scopes' => true,
    ],
];
