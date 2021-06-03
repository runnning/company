<?php
//简易文件上传功能
var_dump($_POST);
var_dump($_FILES);
if($_FILES['video']['error']>0){
    echo 'error'.$_FILES['video']['error'];
}else{
    print_r($_FILES['video']);
    //判断是否通过post
    if(is_uploaded_file($_FILES['video']['tmp_name'])){
        $upload=$_FILES['video'];
        $name=$upload['name'];
        $type=$upload['type'];
        $tmp_name=$upload['tmp_name'];
        //移动文件
        move_uploaded_file($tmp_name,'upload/'.$name);
    }
}