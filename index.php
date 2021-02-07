<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
</head>
<body>

    <?php

        include('Denfer.php');
        include('Austin.php');
        include_once('Humain.php');
        include('Gradouble.php');
        include('Femme-Robot.php');
        
        // calling the magic public method __construct
        $denfer = new Denfer();
        $austin = new Austin();
        $gradouble = new Gradouble();
        $femmerobot = new Fembot();
        
        // calling a public method called talk
        $denfer->parle("Je suis le docteur Denfer!");
        $denfer->attaque($austin);
        $austin->attaque($denfer);
        $femmerobot->attaque($austin);
        $austin->attaque($femmerobot);
        $gradouble->attaque($austin);
        $austin->parle("Vous êtes vraiment trop méchants, je n'ai aucune chances... Je reviendrais avec du renfort ultra sexy, baby !")
    
        

        
    ?>
</body>
</html>