<?php
include"templates/header.php";
?>
<main>

    <?php
    if(isset($_POST) && !empty($_POST)) {
        if(isset($_POST["maDiv1"])) { ?>
            <div>
                <h1 class="text-pop-up-top">Bienvenue</h1>
            </div>
       <?php }
    }
    if(isset($_POST) && !empty($_POST)) {
        if(isset($_POST["maDiv2"])) { ?>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veniam neque harum fugiat modi accusantium, reprehenderit consectetur sed cum aspernatur qui maiores consequuntur quam quidem, labore atque sunt alias facere.</p>
        <img src="img/fleur.webp" alt="rendezVousAlaReunion">
            </div>
       <?php }
    }
    ?>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea incidunt ducimus veniam nam eum, minus distinctio quas totam nesciunt. Vel libero similique sed nesciunt aut consectetur fuga. Rem, qui architecto?</p>
    </div>
</main>
<?php
include"templates/footer.php";
?>