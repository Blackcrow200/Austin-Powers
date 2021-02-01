<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
</head>
<body>

    <?php

        include('monster.php');
        include('Austin.php');

       
        echo "Loading the world of objects.... <br/>";
        
        
        echo "Now, it could be great to fathom a great story and all. But I believe we are here to talk about coding and objects and stuff. <br/> Anyhow, every story starts with a Hero <br/> So.. let's make this short <br />";
        echo "and.. Let's create our Hero <br/><br />";

        // calling the magic public method __construct
        $granny = new Hero('Granny Weatherwax');
        $cat = new Hero('Granny\'s cat');

        echo "Hello Hero !";
        
        // calling a public method called talk
        $granny->talk();

        echo "<br/> Humm.... I believe we could of created a better one... but as we are noobie gods let's go with it for now... <br/>";
        echo "What could our hero do? .... Humm <br />";
        echo "Oh, well, I lack inspiration so let's meet an object </br>";

        $object_monster = new Monster('Object');
        $granny->attack($object_monster);

        echo "Ah, the hero is a rookie !! We just spawned a monster and there we go, our hero attacking it already....";

        echo '<h2>Hero</h2>';
        
        // calling the magic method __toString
        print($granny);

        echo '<h2>Monsters </h2>';
        // calling the magic method __toString
        print($object_monster);
    ?>
</body>
</html>