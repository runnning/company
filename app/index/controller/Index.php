<?php
namespace app\index\controller;

use think\facade\Db;

class Index extends Base
{
    public function index()
    {
        $id=0;
        $adData=Db::name('ad')->where('type_id',1)->select();
        $archiveData=Db::name('archives')->where('cate_id',9)->order('listorder','asc')->order('id','desc')->limit(12)->select();
        return view('',[
            'adData'=>$adData,
            'archiveData'=>$archiveData,
            'menu_id'=>$id
        ]);
    }
    public function company(){
        $id=1;
        $categoryData=Db::name('category')->where('id',$id)->find();
        return view('',[
            'categoryData'=>$categoryData,
            'menu_id'=>$id
        ]);
    }
    public function contact(){
        $id=7;
        $categoryData=Db::name('category')->find($id);
        return view('',[
            'categoryData'=>$categoryData,
            'menu_id'=>$id
        ]);
    }
    public function list(){
        $id=input('id');
        $categoryData=Db::name('category')->find($id);
        $archiveData=Db::name('archives')->field('id,title,time')->where('cate_id',$id)->paginate(20);
        return view('',[
            'categoryData'=>$categoryData,
            'archiveData'=>$archiveData,
            'menu_id'=>$id
        ]);
    }
    public function product(){
        $id=input('id');
        $categoryData=Db::name('category')->find($id);
        $archiveData=Db::name('archives')->where('cate_id',$id)->field('id,title,thumb')->paginate(12);
        return view('',[
            'categoryData'=>$categoryData,
            'archiveData'=>$archiveData,
            'menu_id'=>$id
        ]);
    }
    public function article(){
        $id=input('id');
        $archiveData=Db::name('archives')->find($id);
        $categoryData=Db::name('category')->find($archiveData['cate_id']);
        //上一页 下一页
        $preArchiveData=Db::name('archives')->where('cate_id',$archiveData['cate_id'])->where('id','<',$id)->order('id','desc')->find();
        $nextArchiveData=Db::name('archives')->where('cate_id',$archiveData['cate_id'])->where('id','>',$id)->find();
        return view('',[
            'categoryData'=>$categoryData,
            'archiveData'=>$archiveData,
            'preArchiveData'=>$preArchiveData,
            'nextArchiveData'=>$nextArchiveData,
            'menu_id'=>$id
        ]);
    }
}
