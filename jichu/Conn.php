<?php


class Conn
{
  const host='127.0.0.1';
  private $name='mysql';
    public function test1(){
       echo $this->name;
       return self::host;
    }
    public static function test2(){
       echo (new Conn())->test1();
    }
}
class  test extends Conn{
    public function test3(){
        parent::test2();
    }
}
$a=new test();
$a->test3();