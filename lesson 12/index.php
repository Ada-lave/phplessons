<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $first = 5;
        $second = &$first; // ссылка& на first
    
        require 'point.php';
        $point1 = new Point;

        $first = new Point;
        $first->x=3;
        $first->y=3;

        $second = $first;
        $second->x = 5;
        $second->y = 5;

        echo "x: {$first->x} y: {$first->y} <br>"; // из-за того что в при создании second не создаем новый обьект мы просто ссылаемся на first
        
        echo Point::$num;
    
    ?>
</body>
</html>