<?php

namespace app\index\controller;


use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Base extends BaseController
{
    public function initialize()
    {

        //左边产品中心
        View::assign('leftProduct',$this->getLeftProduct());
        //获取系统设置
        $configData = Db::name('config')->field('value')->select();
        foreach ($configData as $key => $data) {
            if ($key == 0) {
                View::assign('web_name', $data['value']);//网站名称
            }
            if ($key == 2) {
                View::assign('web_keywords', $data['value']);//网站关键字
            }
            if ($key == 4) {
                View::assign('beian', $data['value']);//网站备案号
            }
            if ($key == 6) {
                View::assign('address', $data['value']);//联系地址
            }
            if ($key == 7) {
                View::assign('phone', $data['value']);//联系电话
            }
            if ($key == 12) {
                View::assign('description', $data['value']);//网站描述
            }
        }
    }
    public function getLeftProduct(){
        $archiveData=Db::name('archives')->where(['cate_id'=>9,'ishot'=>'1'])->order(['listorder'=>'asc','id'=>'desc'])->limit(4)->select();
        return $archiveData;
    }
}