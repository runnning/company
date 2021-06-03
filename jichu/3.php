<?php
/*class magic{
    private $name;
    private $age='22';
    function __set($key, $value)
    {
        echo 'execute_set method';
        $this->$key=$value;
    }
}
$obj=new magic();
echo $obj->name='ywn';*/

/*class magic{
    private $age=120;
    protected $name='ywn';
    function __get($name){
        return $this->$name;
    }
}
$obj=new magic();
echo $obj->age;*/

/*class magic{
    private $name;
    private $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function __isset($name){
        echo'外部调用isset()函数检测不可访问属性或者不存在的属性时自动调用';
        return isset($name);
    }
    public function __unset($name){
        echo '外部调用unset销毁不可访问属性或者不存在的属性时自动调用';
        unset($name);
    }
}
$obj=new magic('ywn','22');
var_dump(isset($obj->name));
unset($obj->age);*/

/*class test{
    public $name='ywn';
    public function test2(){
        if(property_exists('test','name')){
           echo 'yes';
        }
    }
}
$obj=new test();
$obj->test2();*/

/*class magic{
    function __call($name,$param){
        echo '方法不存在';
        var_dump($param);
    }
}
$obj=new magic();
$obj->test(1,2,3);*/

/*class magic{
    function __toString()
    {
        return 'ywn';
    }
}
$obj=new magic();
print $obj;
echo $obj;*/

/*abstract class Datebase{
    abstract public function connect($host,$username,$pwd,$db);
    abstract public function query($sql);
    abstract public function fetch();
    abstract public function close();
    public function test(){
        echo 'test';
    }
}
class mysql extends Datebase{
    protected $conn;
    protected $query;
    public function connect($host, $username, $pwd, $db)
    {
        $this->conn=new mysqli($host,$username,$pwd,$db);
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function fetch()
    {
        return $this->query->fetch();
    }

    public function close()
    {
        $this->conn->close();
    }
}*/

interface Test{
    public function get();
}
interface Test2 {
    public function out();
}
class Test1 implements Test,Test2 {
    protected $name;
    protected $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function get()
    {
        return $this->name.' '.$this->age;
    }

    public function out()
    {
        echo $this->name.' '.$this->age;
    }
}
$obj=new Test1('ywn',22);
$obj_clone=clone $obj;
$obj_1=$obj;
var_dump($obj==$obj_clone);
var_dump($obj===$obj_clone);
var_dump($obj===$obj_1);
//var_dump($obj instanceof Test1);
/*class father{
    public $name='ywn';
    function test(){
        echo 'test';
    }
    function __clone()
    {
        $this->name='123';
    }
}
$obj=new father();
$obj_clone= clone $obj;
echo $obj_clone->name;*/