<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>登入成功</h3>

<?php

if (isset($_POST['acc'])) {
    $acc = $_POST['acc'];
    echo "你好! $acc";
} else {
    echo "無法獲取帳號資訊。";
}
?>

</body>
</html>