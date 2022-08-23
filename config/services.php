<?php

use App\Models\socialsetting;


// return $GoogleSocilite = socialsetting::get();

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

    //   'google' => [
    //   'client_id' => '422507230337-ude4jccu13j3tg1lqq5hhrbc311e4o66.apps.googleusercontent.com',
    //   'client_secret' => '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',
    //   'redirect' => 'http://127.0.0.1:8000/callback/google',
    // ],

    // 'facebook' => [
    //     'client_id' => '461915815526461',
    //     'client_secret' => 'c3af56260dec167de0e801b7815e869c',
    //     'redirect' => 'https://127.0.0.1:8000/callback/facebook',
    // ],

    'razorpay' => [
        'key' => env('RAZORPAY_KEY'),
        'secret' => env('RAZORPAY_SECRET'),
    ],

    'paytm-wallet' => [
        'env' => env('PAYTM_ENVIRONMENT'), // values : (local | production)
        'merchant_id' => env('PAYTM_MERCHANT_ID'),
        'merchant_key' => env('PAYTM_MERCHANT_KEY'),
        'merchant_website' => env('PAYTM_MERCHANT_WEBSITE'),
        'channel' => env('PAYTM_CHANNEL'),
        'industry_type' => env('PAYTM_INDUSTRY_TYPE'),
    ],

];
