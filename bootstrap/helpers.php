<?php

//自定义的辅助函数放这里
function test_helper(){
    return 'ok！';
}

//将当前请求的路由名称转换为 CSS 类名称
function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}