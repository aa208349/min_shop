<?php

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

namespace app\store\controller\api;

use library\Controller;

/**
 * 快递查询接口
 * Class Express
 * @package app\store\controller\api
 */
class Express extends Controller
{
    /**
     * 物流查询结果
     */
    public function query()
    {
        $this->expressNo = input('express_no', '');
        $this->expressCode = input('express_code', '');
        $result = \library\tools\Express::query($this->expressCode, $this->expressNo);
        $this->success('获取物流查询结果！', $result);
    }

}
