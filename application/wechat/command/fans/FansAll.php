<?php

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

namespace app\wechat\command\fans;

use app\wechat\command\Fans;

/**
 * 同步全部粉丝指令
 * Class FansBlack
 * @package app\wechat\command\fans
 */
class FansAll extends Fans
{
    /**
     * 配置入口
     */
    protected function configure()
    {
        $this->module = ['list', 'black', 'tags'];
        $this->setName('xfans:all')->setDescription('[同步]所有微信粉丝的数据');
    }
}
