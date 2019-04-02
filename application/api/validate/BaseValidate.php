<?php
// +----------------------------------------------------------------------
// | BaseValidate.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/2 12:49 PM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\api\validate;

use think\exception\HttpValidateException;
use think\Validate;

class BaseValidate extends Validate
{
    public function check($data, $rules = [], $scene = '')
    {
        $res = parent::check($data, $rules, $scene); // TODO: Change the autogenerated stub
        if ( !$res) {
            throw new HttpValidateException($this->getError(), 200);
        }
        return $res;
    }
}
