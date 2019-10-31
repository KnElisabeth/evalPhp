<?php
include"templates/header.php";

if ($_POST["username"]=="admin" && $_POST["password"]=="istrateur") {?>
    <form action="index.php" method="POST">     
        <label for="action">Que souhaitez-vous faire ?</label>
            <input type="checkbox" name="maDiv1" value="maDiv1">Très envie de lire le texte 1
            <input type="checkbox" name="maDiv2" value="maDiv2">Je n'aime que les images !
            <input type="checkbox" name="maDiv3" value="maDiv3">Très envie de lire le texte 2
            <input class="button" type="submit" value="C'est parti !">
    </form>    
    <?php
    $_SESSION["username"]=$_POST["username"];
} else{
    header ('Location:index.php');
    exit();
};

include"templates/footer.php";