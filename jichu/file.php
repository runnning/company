<?php
//echo filetype('1.php');

/*if(is_file('1.jpg')){
    echo 'this is a file';
}else{
    echo 'fale';
}*/

//$path='./upload/static';
/*if(!mkdir($path,0777,true)){
    die('create file fail');
}else{
    echo 'create file success';
}*/
/*if(!rmdir($path)){
    die('delete file fail');
}else{
    echo 'delete file success';
}*/

//$path='./';
/*if(is_dir($path)){
    if($dh=opendir($path)){
        while($file=readdir($dh)){
            echo 'filename:'.$file.' '.'filetype:'.filetype($path.$file).PHP_EOL;
        }
        closedir($dh);
    }
}*/
/*$file=scandir($path,1);
print_r($file);*/

//echo dirname('upload/auto.php');
/*echo disk_free_space('./').PHP_EOL;
echo disk_total_space('./');*/

/*$file=fopen('1.txt','c+');
$buff=fgets($file,123);
fwrite($file,'456');
echo $buff;
fclose($file);*/

/*$file=fopen('1.txt','r');
if($file){
    while($buffer=fgets($file,4096)){
        echo $buffer.PHP_EOL;
    }
    if(!feof($file)){
        echo 'error';
    }
    fclose($file);
}*/

/*$file=fopen('1.txt','r');
if(!$file){
    echo 'can not open the file';
}else{
    while ($char=fgetc($file)){
        echo $char.PHP_EOL;
    }
}*/

/*$filename='1.txt';
if(file_exists($filename)){
    echo $filename.' was last accessed'.date('Y m d H:i:s');
}*/

/*$filename='1.txt';
if(file_exists($filename)){
    echo $filename.' was last modified'.date('Y m d H:i:s',filemtime($filename));
}*/

/*$filename='1.txt';
echo filesize($filename);*/

//print_r(stat('1.txt'));

/*$file='1.txt';
$newfile='1.txt.bak';
if(!copy($file,$newfile)){
    echo 'copy fail';
}else{
    echo 'copy success';
}*/

/*$file='1.txt.bak';
if(!unlink($file)){
    echo 'unlink fail';
}
echo 'unlink success';*/

/*if(rename('1.txt','2.txt')){
    echo 'success';
}else{
    echo 'fail';
}*/

/*$filename='1.txt';
if(is_file($filename)){
    echo '文件总字节数:'.filesize($filename).PHP_EOL;
    $file=fopen($filename,'rb');
    echo '初始指针位置:'.ftell($file).PHP_EOL;
    fseek($file,5);
    echo '使用fseek后的指针位置'.ftell($file).PHP_EOL;
    echo '输出当前指针后面的内容'.fgets($file).PHP_EOL;
    if(feof($file)){
        echo '当前指向文件结尾'.ftell($file).PHP_EOL;
    }
    rewind($file);
    echo '使用rewind后的指针位置'.ftell($file).PHP_EOL;
    echo '输出前五个字符内容'.fgets($file,6);
    fclose($file);
}else{
    echo '文件不存在';
}*/

