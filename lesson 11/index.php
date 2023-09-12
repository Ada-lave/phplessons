<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        require 'point.php';
        $point1 = new Point;

        $point1->x = 13;
        $point1->y = 2;

        echo $point1->x;
    
    ?>
</body>
</html>