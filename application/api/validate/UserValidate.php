<?php

namespace app\Api\validate;


class UserValidate extends BaseValidate
{
    /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'page' => ['number'],
        'page_size' => ['number', 'between:1,20']
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
    protected $message = [
        // 'page.number' => '页码有误',
        // 'page.between' => '页码有误',
    ];

}
