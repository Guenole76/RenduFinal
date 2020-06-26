<?php // CONNEXION
try {
	$bdd = new PDO('mysql:host=localhost;dbname=league_of_friend;charset=utf8', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
} 
 
 
if (isset($_POST['commit'])) {
	$req = $bdd->prepare('SELECT id, mdp_app FROM joueur WHERE pseudo_app = :pseudo_app');
    $req->execute(['pseudo_app' => $_POST['pseudo_app']]);
    
	$resultat = $req->fetch();
	$isPasswordCorrect = password_verify($_POST['mdp_app'], $resultat['mdp_app']);
	
    if (!$resultat) {	
        echo "<script>alert('Mauvais identifiant ou mot de passe')</script>";
        echo 'Mauvais identifiant ou mot de passe !';
    }

    else {
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo_app'] = $_POST['pseudo_app'];

            echo 'Vous êtes connecté !';
            header('Location: index3.php');
        }

        else {
            echo "<script>alert('Mauvais identifiant ou mot de passe')</script>";
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
}
?>