<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>


<?php

if(isset($_GET['height'])){
    $height=$_GET['height'];
}else if(isset($_POST['height'])){
    $height=$_POST['height'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}

if(isset($_GET['weight'])){
    $weight=$_GET['weight'];
}else if(isset($_POST['weight'])){
    $weight=$_POST['weight'];
}else{
    echo "請使用正確管道進到此頁面!";
    exit();
}


?>
<h1>BMI結果</h1>
<div>你的身高:<?=$height;?>公分</div>
<div>你的體重:<?=$weight;?>公斤</div>


<?php

$h=$height/100;
$bmi=round($weight/($h * $h),2);


if($bmi<=18.5){
    $level= "狀態:體重過輕";
}elseif($bmi>18.5 && $bmi<=25){
    $level= "狀態:體重正常";
}elseif($bmi>25 && $bmi<=30){
    $level= "狀態:體重過重（肥胖前期）";
}elseif($bmi>30 && $bmi<=35){
    $level= "狀態:肥胖I級（輕度肥胖）";
}elseif($bmi>35 && $bmi<=40){
    $level= "狀態:肥胖II級（中度肥胖）";
}elseif($bmi>40){
    $level= "狀態:肥胖III級（嚴重肥胖）";
}

?>

<div>你的BMI為:<?=$bmi;?></div>

<div>體位判定為:<?=$level;?></div>
<div>
    <a href="index.php">重首頁/重新測量</a>
</div>
    
</body>
</html>