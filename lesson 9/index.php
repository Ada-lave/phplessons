<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $str = '45.2'; // строка
    $num = $str - 12; // строка преобразуется в число и вычитается
    
    echo $num;

    $var = 0.0; // если тут будет строка которая содержит 0 то значие будет false

    if($var){
        echo "var is true";
    }
    else {
        echo 'var is false';
    }
    ?>
    <br>

    <?php
    
    $float = 4.3;
    $num = (int)$float;

    echo $num;
    
    ?>
</body>
</html>