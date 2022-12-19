<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $varChar = 1;
    $varChar2 = 2;
    
    if( $varChar > $varChar2){
    
        $varChar = $varChar * 2;

        $uitkomst = $varChar + $varChar2;
        echo $uitkomst;
    }
    else{
        $varChar2 = $varChar2 * 2;

        $uitkomst = $varChar + $varChar2;
        echo $uitkomst;
        }
    

    
    ?>
</body>
</html>