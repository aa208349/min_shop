<?php

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

namespace app\wechat\command\fans;

use app\wechat\command\Fans;

/**
 * 粉丝标签指令
 * Class FansTags
 * @package app\wechat\command\fans
 */
class FansTags extends Fans
{
    /**
     * 配置入口
     */
    protected function configure()
    {
        $this->module = ['tags'];
        $this->setName('xfans:tags')->setDescription('[同步]粉丝的标签记录数据');
    }
}
