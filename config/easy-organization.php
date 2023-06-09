<?php
use JuCloud\EasyOrganization\EasyOrganization;

return [
    'tianyancha' => [
        'default' => [
            // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
            'mode' => EasyOrganization::MODE_NORMAL,
            // 必填-天眼查分配的 token
            'token' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxx'
        ],
    ],
    'qichacha' => [
        'default' => [
            // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
            'mode' => EasyOrganization::MODE_NORMAL,
            // 必填-企查查分配的 Key
            'app_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxx',
            // 必填-企查查分配的 SecretKey
            'secret_key' => 'xxxxxxxxxxxxxxxxxxxxxxxx'
        ],
    ],
    'qixin' => [
        'default' => [
            // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
            'mode' => EasyOrganization::MODE_NORMAL,
            // 必填-企查查分配的 appkey
            'app_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxx',
            // 必填-企查查分配的 secret_key
            'secret_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxx'
        ],
    ],
    'http' => [ // optional
        'timeout' => 5.0,
        'connect_timeout' => 5.0,
        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
    ],
    // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/jucloud.organization.log'
    'logger' => [
        'enable' => true,
        'file' => storage_path('logs/jucloud.organization.log'),
        'level' => 'debug',
        'type' => 'single', // optional, 可选 daily.
        'max_file' => 30,
    ],
];
