<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- G staat voor tijd in uren -->
    <?php
            $tijd = date("G");

    if ($tijd == 6 || $tijd == 7 || $tijd == 8 || $tijd == 9 || $tijd == 10 || $tijd == 11 ){
        echo "Het is ochtend";
    }
    if ($tijd == 12 || $tijd == 13 || $tijd == 14 || $tijd == 15 || $tijd == 16 || $tijd == 17 ){
        echo "Het is middag";
    }
    if ($tijd == 18 || $tijd == 19 || $tijd == 20 || $tijd == 21 || $tijd == 22 || $tijd == 23 ){
        echo "Het is avond";
    }
    if ($tijd == 24 || $tijd == 1 || $tijd == 2 || $tijd == 3 || $tijd == 4 || $tijd == 5 ){
        echo "Het is nacht";
    }
    ?>
</body>
</html>