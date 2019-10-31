<?php
include"templates/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">     
            <label for="action">Que souhaitez-vous faire ?</label>
                <input type="checkbox" name="maDiv1" value="lorem1">Très envie de lire le texte 1
                <input type="checkbox" name="maDiv2" value="img">Je n'aime que les images !
                <input type="checkbox" name="maDiv3" value="lorem2">Très envie de lire le texte 2
                <input class="button" type="submit" value="C'est parti !">
        </form> 
</body>
</html>
<?php

include"templates/footer.php";
