<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
</head>
<body>

    <?php

        include('Denfer.php');
        include('Austin.php');

        // calling the magic public method __construct
        $denfer = new Denfer();
        $austin = new Austin();
        
        // calling a public method called talk
        $denfer->parle("Je suis le docteur Denfer!");

    ?>
</body>
</html>