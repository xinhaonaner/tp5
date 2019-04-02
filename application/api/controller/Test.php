<?php
// +----------------------------------------------------------------------
// | Test.php
// +----------------------------------------------------------------------
// | Description: demo
// +----------------------------------------------------------------------
// | Time: 2019/4/1 9:31 PM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\api\controller;

use app\api\model\User;
use app\api\validate\UserCreateValidate;
use app\Api\validate\UserValidate;
use think\Request;

class Test extends BaseController
{
    public function index(Request $request, UserValidate $userValidate)
    {
        $userValidate->check($request->get());

        $pageSize = $request->get('page_size', 10);
        $where = [
            'status' => 1,
            'role' => 10,
        ];
        $field = 'id,username,status,role,createtime';
        $lists = User::field($field)->where($where)->order('id', 'asc')->paginate($pageSize)->toArray();
        $this->result($lists);
    }

    public function read($id)
    {
        $list = User::findOrEmpty($id);
        $this->result($list);
    }

    public function save(UserCreateValidate $validate, Request $request)
    {
        $validate->check($request->param());
        wlog('用户添加数据：' . json_encode($request->param(), JSON_UNESCAPED_UNICODE), 'Test.log');

        try {
            $res = User::create($validate->data());
            $this->result($res, '添加成功');
        } catch (\PDOException $e) {
            wlog('添加用户失败：' . $e->getMessage(), 'Test.log');

            $this->result('', 500, '服务器繁忙，请稍后从试');
        }
    }

    public function update($id)
    {
        wlog('修改用户id：' . $id, 'Test.log');
        $list = User::findOrEmpty($id);
        $this->result($list);
    }
}
