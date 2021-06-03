<?php
use think\facade\Route;
//路由器地址规则
Route::rule('company','index/index/company');
Route::rule('contact','index/index/contact');
Route::rule('product/:id','index/index/product');
Route::rule('list/:id','index/index/list');
Route::rule('article/:id','index/index/article');