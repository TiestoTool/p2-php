<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tijd = date ("G");

    switch($tijd){
        // nacht
        case 0: echo "het is nacht";    break;
        case 1: echo "het is nacht";    break;
        case 2: echo "het is nacht";    break;
        case 3: echo "het is nacht";    break;
        case 4: echo "het is nacht";    break;
        case 5: echo "het is nacht";    break;
        // ochtend
        case 6: echo "het is ochtend";    break;
        case 7: echo "het is ochtend";    break;
        case 8: echo "het is ochtend";    break;
        case 9: echo "het is ochtend";    break;
        case 10: echo "het is ochtend";    break;
        case 11: echo "het is ochtend";    break;
        // middag
        case 12: echo "het is middag";    break;
        case 13: echo "het is middag";    break;
        case 14: echo "het is middag";    break;
        case 15: echo "het is middag";    break;
        case 16: echo "het is middag";    break;
        case 17: echo "het is middag";    break;
        // avond
        case 18: echo "het is avond";    break;
        case 19: echo "het is avond";    break;
        case 20: echo "het is avond";    break;
        case 21: echo "het is avond";    break;
        case 22: echo "het is avond";    break;
        case 23: echo "het is avond";    break;
    }
    ?>
</body>
</html>