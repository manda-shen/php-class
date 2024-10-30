<?php
session_start();
if(!isset($_POST['acc'])){
    header("location:login.php");
    exit();
}

$acc=$_POST['acc'];
$password=$_POST['password'];

if($acc=='admin' && $password=='1234'){
    echo "登入成功";
    setcookie("login","$acc",time()+60);
    echo $_COOKIE['login'];
    echo "<br><a href='login.php?login=$acc'>回首頁</a>";

}else{
    echo "密碼錯誤:登入失敗";
}

?>
