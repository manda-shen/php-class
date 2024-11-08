<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$class['name'];?>詳細資料</title>
</head>
<body>
    <h1>班級學員</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$class_id=$_GET['id'];



$sql2="select 'students'.'name' from students
?>
    
</body>
</html>