<?php

/*error_reporting(0);//错误级别0,没有错误
function connDb(){
    $mysql=mysqli_connect('127.0.0.0','123','123','123','3306');
    if($mysql){
        return $mysql;
    }else{
        throw  new  Exception('不能连数据库');
    }
}
function db(){
    try {
        $db=connDb();
        var_dump($db);
    }catch (Exception $e){
        echo  $e->getMessage();
    }
}
db();*/
/*class emailException extends Exception
{
    public function test()
    {
      return  $error = 'file:' . $this->getFile() . 'line in' . $this->getLine();
    }
}

class nameException extends Exception
{

}

function check($res)
{
    if (empty($res['email'])) {
        throw  new emailException('email is null ', 1);
    }
    if (empty($res['name'])) {
        throw new nameException('name is null', 2);
    }
}
try {
    $res = ['phone' => '18967145097'];
    check($res);
} catch (emailException $e) {
    echo $e->test();
} catch (nameException $e) {
    echo 'error msg:' . $e->getMessage() . 'error code:' . $e->getCode();
} finally {
    echo 'finally';
}*/

/*if(!mysqli_connect('123','123','123','123')){
    error_log('mysql connect faild',3,'error.log');
}*/
/*function error_hander($errorno,$errorstr,$errorfile,$errorline){
    echo 'error number:'.$errorno.PHP_EOL;
    echo 'error msg:'.$errorstr.PHP_EOL;
    echo 'error file:'.$errorfile.PHP_EOL;
    echo 'error line:'.$errorline.PHP_EOL;
}
set_error_handler('error_hander');
strpos();*/

/*function error_hander($errorno,$errorstr,$errorfile,$errorline){
    echo 'error number:'.$errorno.PHP_EOL;
    echo 'error msg:'.$errorstr.PHP_EOL;
    echo 'error file:'.$errorfile.PHP_EOL;
    echo 'error line:'.$errorline.PHP_EOL;
    die('something wrong');
}
set_error_handler('error_hander');
try {
    $a=5/0;
    var_dump($a);
}catch (Exception $e){
    echo $e->getMessage();
}*/
/*try {
    $a=new cat();
}catch (Error $e){
    echo 'error msg:'.$e->getMessage().'error line:'.$e->getLine();
}*/
