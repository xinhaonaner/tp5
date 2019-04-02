<?php
// +----------------------------------------------------------------------
// | UserCreateValidate.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/2 12:46 PM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\api\validate;

use think\Validate;

class UserCreateValidate extends BaseValidate
{
    protected $rule = [
        'username' => ['require', 'unique:user'],
        'password' => ['require', 'max:32'],
    ];

    public function data()
    {
        $time = time();
        return [
            'username' => request()->post('username'),
            'password' => request()->post('password'),
            'role' => 10,
            'last_login_time' => $time,
            'createtime' => $time,
            'companyname' => '',
            'profession' => '',
            'business' => '',
            'people' => 10,
            'turnover' => '',
            'contacts' => '123',
            'tel' => 123,
            'phone' => 123,
            'qq' => '123',
            'level' => 10,
            'viptime' => $time,
            'email' => '',
        ];
    }
}
