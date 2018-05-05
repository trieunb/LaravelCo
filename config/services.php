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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     =>  '2050051548583835',
        'client_secret' =>  '9af1320b9a4001bd5c327402e0953ef5',
        'redirect'      =>  'http://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     =>  '',
        'client_secret' =>  '',
        'redirect'      =>  'http://localhost:8000/auth/google/callback',
    ],

    'github' => [
        'client_id'     =>  '',
        'client_secret' =>  '',
        'redirect'      =>  'http://localhost:8000/auth/github/callback',
    ],

    'twitter' => [
        'client_id'     =>  '',
        'client_secret' =>  '',
        'redirect'      =>  'http://localhost:8000/auth/twitter/callback',
    ],
];
