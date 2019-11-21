<?php

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

namespace app\store\controller\api;

use library\Controller;

/**
 * 数据商城基础数据
 * Class Data
 * @package app\store\controller\api
 */
class Data extends Controller
{
    /**
     * 获取轮播图片数据
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function getSlider()
    {
        $this->keys = input('keys', 'slider_home');
        $this->success('获取轮播图片数据！', sysdata($this->keys));
    }

}