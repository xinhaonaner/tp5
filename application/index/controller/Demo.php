<?php
// +----------------------------------------------------------------------
// | Demo.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/1 6:19 PM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\index\controller;

use think\Controller;

class Demo extends Controller
{
    public function index()
    {

        $list = [
            ['name' => '小王', 'age' => 12],
            ['name' => '小张', 'age' => 13],
        ];

        return $this->result($list, 200, 'success');

    }
}
