<?php
//print_r(getimagesize('test.jpg'));

/*$img='test.jpg';
$info1=getimagesize($img);
$data=file_get_contents($img);
$info2=getimagesizefromstring($data);
print_r($info1);
print_r($info2);*/

/*$img=imagecreatetruecolor(200,300);
echo imagesx($img).PHP_EOL;
echo imagesy($img);*/

/*header('Content-type:image/jpeg');
$im=@ imagecreate(100,50) or die('不能创建');
$bg=imagecolorallocate($im,255,0,0);
imagejpeg($im);
imagedestroy($im);*/

/*header('Content-type:image/png');
$im= @ imagecreatetruecolor(120,20) or die('不能创建');
//$bg=imagecolorallocate($im,233,14,91);
$bg=imagecolorallocatealpha($im,255,0,0,127);
var_dump($bg);
imagepng($im);
imagedestroy($im);*/

/*$img=imagecreatetruecolor(400,300);
$bg=imagecolorallocate($img,0,0,0);
$ellipse=imagecolorallocate($img,255,255,255);
imageellipse($img,0,300,150,100,$ellipse);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$values=[
    40,50,
    20,240,
    60,60,
    240,20,
    50,40,
    10,10
];
$img=imagecreatetruecolor(250,250);
$bg=imagecolorallocate($img,200,200,200);
$blue=imagecolorallocate($img,0,0,255);
imagefilledpolygon($img,$values,6,$blue);

header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$img=imagecreate(250,250);
$bg=imagecolorallocate($img,10,110,25);
$blue=imagecolorallocate($img,0,0,255);
imagefilledrectangle($img,100,150,50,50,$blue);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$img=imagecreatetruecolor(200,200);
$color=imagecolorallocate($img,200,100,0);
imagearc($img,100,100,150,100,50,260,$color);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$img=imagecreate(100,100);
$str='Php';
$bg=imagecolorallocate($img,0,255,255);
$black=imagecolorallocate($img,0,0,0);
imagechar($img,100,40,40,$str,$black);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$img=imagecreate(100,100);
$str='Php';
$bg=imagecolorallocate($img,0,255,255);
$black=imagecolorallocate($img,0,0,0);
imagecharup($img,100,40,40,$str,$black);
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$img=imagecreatetruecolor(300,100);
$red=imagecolorallocate($img,0xFF,0x00,0x00);
$black=imagecolorallocate($img,0x00,0x00,0x00);
imagefilledrectangle($img,0,0,299,99,$red);
imagefttext($img,30,20,105,55,$black,'D:\phpstudy_pro\WWW\www.blog.com\jichu\Comic-Shark.ttf','php');
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);*/

/*$imgdst=imagecreatefromjpeg('1.jpg');
$imgsrc=imagecreatefrompng('sight.png');
imagecopy($imgdst,$imgsrc,100,100,100,100,200,200);
header('Content-type:image/png');
imagejpeg($imgdst);*/

/*header('Content-type:image/png');
$file='sight.png';
$angle=100;
$source=imagecreatefrompng($file);
$roate=imagerotate($source,$angle,0);
imagepng($roate);*/

/*$img=imagecreatefromjpeg('1.jpg');
var_dump(imagecopymerge($img,imagecreatefrompng('sight.png'),20,20,0,100,100,100,50));
imagejpeg($img,'haha.jpg');*/

echo password_hash('base38426',PASSWORD_DEFAULT);