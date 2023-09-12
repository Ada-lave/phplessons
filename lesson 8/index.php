<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $user = "Ivan";

    if(isset($user)) // проверка на создание переменной
        echo "created";
    else
        echo "dont created";
    
    ?>

    <br>

    <?php
    
    $str = "";

    if(empty($str)) // проверка строки, пустая она или нет
        echo "dont created";
    else
        echo "created";
    
    ?>

    <br>
    <?php
    
    echo gettype(123);
    echo is_int(2);
    
    ?>

</body>
</html>