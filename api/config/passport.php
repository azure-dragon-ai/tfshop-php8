<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Passport Guard
    |--------------------------------------------------------------------------
    |
    | Here you may specify which authentication guard Passport will use when
    | authenticating users. This value should correspond with one of your
    | guards that is already present in your "auth" configuration file.
    |
    */

    'guard' => 'web',

    /*
    |--------------------------------------------------------------------------
    | Encryption Keys
    |--------------------------------------------------------------------------
    |
    | Passport uses encryption keys while generating secure access tokens for
    | your application. By default, the keys are stored as local files but
    | can be set via environment variables when that is more convenient.
    |
    */

    'private_key' => env('PASSPORT_PRIVATE_KEY'),

    'public_key' => env('PASSPORT_PUBLIC_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Passport Database Connection
    |--------------------------------------------------------------------------
    |
    | By default, Passport's models will utilize your application's default
    | database connection. If you wish to use a different connection you
    | may specify the configured name of the database connection here.
    |
    */

    'connection' => env('PASSPORT_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Client UUIDs
    |--------------------------------------------------------------------------
    |
    | By default, Passport uses auto-incrementing primary keys when assigning
    | IDs to clients. However, if Passport is installed using the provided
    | --uuids switch, this will be set to "true" and UUIDs will be used.
    |
    */

    'client_uuids' => true,

    /*
    |--------------------------------------------------------------------------
    | Personal Access Client
    |--------------------------------------------------------------------------
    |
    | If you enable client hashing, you should set the personal access client
    | ID and unhashed secret within your environment file. The values will
    | get used while issuing fresh personal access tokens to your users.
    |
    */

    'personal_access_client' => [
        'id' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_ID'),
        'secret' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET'),
    ],

    /*
    |--------------------------------------------------------------------------
    | oauth验证
    |--------------------------------------------------------------------------
    |
    */
    // 后台
    'admin' => [
        'proxy' => [
            'grant_type' => 'password',
            'client_id' => env('PASSPORT_CLIENT_ID',''),
            'client_secret' => env('PASSPORT_CLIENT_SECRET',''),
            'scope' => '*',
        ],
        'refresh' => [
            'grant_type' => 'refresh_token',
            'client_id' => env('PASSPORT_CLIENT_ID',''),
            'client_secret' => env('PASSPORT_CLIENT_SECRET',''),
            'scope' => '*',
        ],
    ],
    // web
    'web' => [
        'proxy' => [
            'grant_type' => 'password',
            'client_id' => env('PASSPORT_WEB_ID',''),
            'client_secret' => env('PASSPORT_WEB_SECRET',''),
            'scope' => '*',
        ],
        'refresh' => [
            'grant_type' => 'refresh_token',
            'client_id' => env('PASSPORT_WEB_ID',''),
            'client_secret' => env('PASSPORT_WEB_SECRET',''),
            'scope' => '*',
        ],
    ],
    'hash_client_secrets' => env('HASH_CLIENT_SECRETS', false),   //客户端秘钥的 hash 加密
    'expires_in' => env('PASSPORT_EXPIRES_IN','7200'),  // token失效时间(单位秒)，默认为2小时;这里设置超过1天，移动端的token刷新才会有效
    'refresh_expires_in' => env('REFRESH_PASSPORT_EXPIRES_IN','604800'),  // token刷新失效时间(单位秒)，默认为7天

];
