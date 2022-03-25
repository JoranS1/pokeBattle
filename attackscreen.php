<?php
    require("index.php");
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
        $pokemon1 = new Pokemon('Pikachu', 'Electric', 21, 'Thunderbolt', 21, 'Grass', 'Water', 9);
        $pokemon2 = new Pokemon('Braviary', 'Flying', 40, 'Wing Attack', 40, 'Fighting', 'Electric', 10);
    
    
    while($pokemon1->health > 0 && $pokemon2->health > 0){
        if($pokemon1->health <= 0){
            break;
        }
        echo $pokemon1->attack($attack, $dmg);
    }
    ?>
</body>
</html>