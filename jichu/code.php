<?php
function random($len){
    $srcstr='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    mt_srand();
    $strs='';
    for($i=0;$i<$len;$i++){
        $strs.=$srcstr[mt_rand(0,35)];
    }
    return strtoupper($strs);
}
$str=random(4);
$w=50;
$h=25;
@header('Content-type:image/png');
$im=imagecreate($w,$h);
$black=imagecolorallocate($im,0xFF,0xFF,0xFF);
$pix=imagecolorallocate($im,187,230,247);
$font=imagecolorallocate($im,41,163,238);
mt_srand();
for($i=0;$i<1000;$i++){
    imagesetpixel($im,mt_rand(0,$w),mt_rand(0,$h),$pix);
}
imagestring($im,5,7,5,$str,$font);
imagerectangle($im,0,0,$w-1,$h-1,$font);
imagepng($im);
imagedestroy($im);
