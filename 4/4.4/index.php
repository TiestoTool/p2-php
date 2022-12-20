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
        $prijs = 56;
        if( $prijs > 150){
                $uitkomst = $prijs * 1.19;
                echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 19%: $uitkomst";  
        }

        elseif( $prijs < 55){
                $uitkomst = $prijs * 1.11;
                echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 11%: $uitkomst";  
        }
        else {
            $uitkomst = $prijs * 1.16;
            echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 16%: $uitkomst";  
    }
    
    ?>
</body>
</html>