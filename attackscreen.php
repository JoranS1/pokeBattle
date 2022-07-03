<?php
    require("functions.php");
?>

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
        $pokemon1 = new Pikachu; 
        $pokemon2 = new Pidgey;
    
    
    while($pokemon1->health > 0 && $pokemon2->health > 0){
        if($pokemon1->health <= 0){
            break;
        }
        echo $pokemon1->attack= new Attack($attack, $dmg);

        if($pokemon2->health <=0){
            break;
        }
        echo $pokemon2->attack= new Attack($attack, $dmg);
    }

    ?>
</body>
</html>