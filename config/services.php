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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'github' => [
    'client_id' => 'Ov23cts3nzE3Ib6ef3ax',
    'client_secret' => 'd08087dac4d0a788994d26ec6c065edf34443647',
    'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],

    'google' => [
        'client_id' => '234402584109-26st435vht2tdu32i6od67mec54jlgcp.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
