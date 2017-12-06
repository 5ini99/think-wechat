<?php
// +----------------------------------------------------------------------
// | thinkphp5 Wechat [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.zzstudio.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Byron Sampson <xiaobo.sun@qq.com>
// +----------------------------------------------------------------------

if (!function_exists('wechat')) {
    /**
     * 快速调用
     * @param $name
     * @return mixed
     */
    function wechat($name)
    {
        return call_user_func([\think\Wechat::class, $name]);
    }
}