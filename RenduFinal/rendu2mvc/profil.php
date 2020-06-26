 <?php 
session_start();
?>


<!-- HEAD -->
<?php require __DIR__ . "/../header.php"; ?>

 <?php require __DIR__ . "/../header2.php"; ?>
 
<!-- Traitement formulaire -->
<?php require __DIR__ . "/../traitement_formulaire.php"; ?>
<!-- Traitement de connexion -->
<?php require __DIR__ . "/../traitement_de_connexion.php"; ?>


<h2><?php echo $_SESSION['pseudo_app'];?></h2>

<?php require __DIR__ . "/../footer.php"; ?>
