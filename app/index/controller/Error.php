<?php


namespace app\index\controller;

//空控制器
class Error
{
    public function __call($method,$args){
        return view('error/500');
    }
}