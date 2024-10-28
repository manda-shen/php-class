<?php

$acc=$_POST['acc'];
$password=$_POST['password'];

if($acc=='admin' && $password=='1234'){
    echo "登入成功";
}else{
    echo "密碼錯誤:登入失敗";
}

?>