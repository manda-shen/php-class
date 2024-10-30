<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(https://picsum.photos/id/57/1080);
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        fieldset {
            justify-content: center;
            align-self: center;
            width: 20%;
            background: rgba(185, 223, 245, 0.3);
            backdrop-filter: blur(10px);
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(166, 205, 218);
            border: 1px solid rgb(174, 188, 192);
            border-radius: 10px;
            padding: 16px;
        }

        div {
            padding: 5px;
            font-size: 12;
            color: rgb(87, 95, 117);
            border: 1px rgb(166, 172, 180);
        }

        input {
            font-size: 12px;
        }

        select {
            font-size: 12px;
        }
    </style>
</head>

<body>


    <fieldset class="login-container">
    <?php
    if(!isset($_COOKIE['login'])){
    ?>
        <h2>登入</h2>
        <form action="check_acc.php" method="post">
            <div>
                <label for="name">帳號</label>
                <input type="text" name="acc" placeholder="使用者名稱" required>
            </div>
            <div>
                <label for="password" name="password">密碼</label>
                <input type="password" name="password" placeholder="密碼" required>
            </div>
            <div>
                <input type="submit" value="登入">
            </div>


        </form>
        <?php
}else{
?>
        <div>
            你已登入
        </div>
<?php
}
?>

    </fieldset>

</body>

</html>