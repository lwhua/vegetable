<?php
return [
    'use_alias'    => env('WECHAT_USE_ALIAS', false),
    'app_id'       => env('WECHAT_APPID', 'wx9fa01b432f4247ad'), // 必填
    'secret'       => env('WECHAT_SECRET', '7e3302442ef7ac226314591e84a09c35'), // 必填
    'token'        => env('WECHAT_TOKEN', 'YourToken'),  // 必填
    'encoding_key' => env('WECHAT_ENCODING_KEY', 'YourEncodingAESKey') // 加密模式需要，其它模式不需要
];
