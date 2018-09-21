<?php
return [
    // 是否开启api log 日志记录
    'user.log' => true,
    'user.log.noPostData' => [ // 安全考虑，不接收Post存储到日志的路由
        'v1/site/login',
    ],
    // token有效期是否验证 默认不验证
    'user.accessTokenValidity' => false,
    // api接口token有效期 默认2天
    'user.accessTokenExpire' => 2 * 24 * 3600,
    // 不需要token验证的方法
    'user.optional' => [

    ],
    // 速度控制 60 秒内访问 50 次，注意，数组的第一个不要设置1，设置1会出问题，一定要大于2
    'user.rateLimit' => [50, 60],
    // 默认分页数量
    'user.pageSize' => 10,
];