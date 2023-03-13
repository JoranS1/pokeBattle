<?php
    require "autoload.php"; // the autoloader function for all files
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeBattle</title>
</head>
<body>
    <h3>ITS TIME FOR A BATTLE OF POKEMON LETS A GOOOOO</h3>
    <?php 
        // the pokemon are made here
        $pokemon1 = new Pikachu(); //
        $pokemon2 = new Pidgey();
        //$pokemon3 = new Pokemon(0,0,0,0,0,0,0);
    echo "<br><br><br>";
    // battle starts
    print_r($pokemon1->getName() . " vs " . $pokemon2->getName() . "<br><br>");
    print_r($pokemon1->getName() . "'s health: " . $pokemon1->getHealth() . "<br><br>");
    print_r($pokemon2->getName() . "'s health: " . $pokemon2->getHealth() . "<br><br>");
    
    // Pokemon 1 does a attack
    print_r($pokemon1->getName() . " attacks with: " . $pokemon1->getAttackName(0) . "<br><br>");
    $pokemon2->damageCalculate(0, $pokemon1);

    // Pokemon 2 does a attack
    print_r($pokemon2->getName() . " attacks with: " . $pokemon2->getAttackName(0) . "<br><br>");
    $pokemon1->damageCalculate(0, $pokemon2);

    // if the Pokemon HP is 0 or lower the Pokemon is fainted and unset from the count variable
    if($pokemon1->getHP() <= 0){
        print_r($pokemon1->getName() . " fainted");
        unset($pokemon1);
        Pokemon::$count--;
    }    
    else if($pokemon2->getHP() <= 0){
        print_r($pokemon2->getName() . " fainted");
        unset($pokemon2);
        Pokemon::$count--;
    }

    print_r("Pokemons left alive: " . Pokemon::$count);
    ?>
</body>
</html>