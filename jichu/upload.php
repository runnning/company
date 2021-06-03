<?php
$file=$_FILES['file'];
if($file['error']==0){
    if(is_uploaded_file($file['tmp_name'])){
        if(move_uploaded_file($file['tmp_name'],'upload/'.$file['name'])){
            echo  'upload success';
        }else{
            echo  'upload fail';
        }
    }else{
        echo '只能通过post上传';
    }
}else{
    echo 'error:'.$file['error'];
}