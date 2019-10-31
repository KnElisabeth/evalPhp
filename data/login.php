<?php
include"templates/header.php";
?>
<main>
    <h1 class="text-pop-up-top">Connectez-vous</h1>
        <form action="user.php" method="POST">
            <label for="username" >Pseudo</label>
                <input type="text" name="username" placeholder="Votre pseudo..." required>
            <label for="password" >Mot de passe</label>
                <input type="password" name="password" placeholder="Votre mot de passe..." required>
            <input class="button" type="submit" value="Entrez !">
        </form>
</main>
<?php

include"templates/footer.php";
