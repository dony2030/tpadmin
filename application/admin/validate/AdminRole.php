<?php
// +----------------------------------------------------------------------
// | tpadmin [a web admin based ThinkPHP5]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 tianpian All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: tianpian <tianpian0805@gmail.com>
// +----------------------------------------------------------------------

//------------------------
// 角色验证器
//-------------------------

namespace app\admin\validate;

use think\Validate;

class AdminRole extends Validate
{
    protected $rule = [
        "name|名称"   => "require|unique:admin_role",
        "status|状态" => "require",
    ];
}