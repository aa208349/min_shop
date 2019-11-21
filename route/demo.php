<?php

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

use think\facade\Request;
use think\facade\Route;

/* 演示环境禁止操作路由绑定 */
if (stripos(Request::host(true), 'thinkadmin.top') !== false) {
    Route::post('admin/user/pass', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改用户密码！']);
    });
    Route::post('admin/index/pass', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改用户密码！']);
    });
    Route::post('admin/config/file', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改系统配置！']);
    });
    Route::post('admin/config/config', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改系统配置！']);
    });
    Route::post('admin/menu/index', function () {
        return json(['code' => 0, 'info' => '演示环境禁止给菜单排序！']);
    });
    Route::post('admin/menu/add', function () {
        return json(['code' => 0, 'info' => '演示环境禁止添加菜单！']);
    });
    Route::post('admin/menu/edit', function () {
        return json(['code' => 0, 'info' => '演示环境禁止编辑菜单！']);
    });
    Route::post('admin/menu/forbid', function () {
        return json(['code' => 0, 'info' => '演示环境禁止禁用菜单！']);
    });
    Route::post('admin/menu/remove', function () {
        return json(['code' => 0, 'info' => '演示环境禁止删除菜单！']);
    });
    Route::post('wechat/config/options', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改微信配置！']);
    });
    Route::post('service/config/edit', function () {
        return json(['code' => 0, 'info' => '演示环境禁止修改开放配置！']);
    });
}
