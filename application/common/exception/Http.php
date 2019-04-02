<?php
// +----------------------------------------------------------------------
// | Http.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/2 11:13 AM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace app\common\exception;

use Exception;
use think\exception\Handle;
use think\exception\HttpException;
use think\exception\HttpValidateException;
use think\exception\ValidateException;

class Http extends Handle
{
    public function render(Exception $e)
    {
        // 参数验证错误
        if ($e instanceof HttpValidateException) {
            return json(['code' => 422, 'msg' => $e->getError()], 200);
        }

        // 请求异常
        if ($e instanceof HttpException && request()->isAjax()) {
            return response($e->getMessage(), $e->getStatusCode());
        }

        // 其他错误交给系统处理
        return parent::render($e);
    }
}
