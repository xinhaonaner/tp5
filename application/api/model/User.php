<?php
// +----------------------------------------------------------------------
// | User.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/1 10:16 PM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\api\model;

use think\Model;

class User extends Model
{
    protected $table = 'user';
    protected $pk = 'id';
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    // protected $createTime = 'create_at';
    // protected $updateTime = 'update_at';

    protected $type = [
        'id' => 'integer',
        'status' => 'integer',
        'username' => 'string',
        'role' => 'integer',
        'createtime' => 'timestamp:Y-m-d'
    ];
}
