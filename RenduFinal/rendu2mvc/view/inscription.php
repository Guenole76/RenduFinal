
<!-- HEAD -->
<?php require __DIR__ . "/../header2.php"; ?>

<?php require __DIR__ . "/../traitement_formulaire.php"; ?>
 
<div class="login">
    <link rel="stylesheet" href="css/style.css">

    <form method="post" action="">
        <div class="titre">Adresse Mail</div>
        <p class="inscri">
            <input type="text" name="email" id="email" value="" placeholder=" Entrez votre Email" /></p>

        <p class="titre">Pseudo</p>
        <p class="inscri">
            <input type="text" name="pseudo_app" id="pseudo_app" value="" placeholder="Entrez un Pseudo" /></p>

        <p class="titre">Mot de passe</p>
        <p class="inscri">
            <input type="password" name="mdp_app" id="mdp_app" value="" placeholder="Entrez un Mot de passe" />
        </p>

		<p class="titre">Valider le mot de passe</p>
        <p class="inscri">
            <input type="password" name="password_confirm" value="" placeholder="resaissiser votre Mot de passe" />
        </p>

        <p class="submit"><input type="submit" name="commit" value="Validé"></p>
    </form>
</div>


<?php require __DIR__ . "/../footer.php"; ?>    

