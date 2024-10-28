<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
    <style>
        fieldset {
            width: 70%;
            background: rgba(185, 223, 245, 0.3);
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
    <fieldset>
        <h1>計算BMI</h1>
        <form action="result.php" method="get">
            <div>
                <label for="height">身高</label>
                <input type="number" name="height" id="height">
            </div>
            <div>
                <label for="weight">體重:</label>
                <input type="text" name="weight" id="weight">
            </div>
            <div>
                <input type="submit" value="計算">
                <input type="reset" value="清空/重置">
            </div>

        </form>
    </fieldset>


    <?php


?>

</body>

</html>