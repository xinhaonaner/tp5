<?php
// +----------------------------------------------------------------------
// | HttpValidateException.php
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------
// | Time: 2019/4/2 11:41 AM
// +----------------------------------------------------------------------
// | Author: Felix <Fzhengpei@gmail.com>
// +----------------------------------------------------------------------

namespace think\exception;

class HttpValidateException extends \RuntimeException
{
    protected $error;

    public function __construct($error, $code = 0)
    {
        $this->error = $error;
        $this->message = is_array($error) ? implode("\n\r", $error) : $error;
        $this->code = $code;
    }

    /**
     * 获取验证错误信息
     * @access public
     * @return array|string
     */
    public function getError()
    {
        return $this->error;
    }
}
