<?php // CREATION D'UN COMPTE

// essaie de se connecter à la bdd
try {
	$bdd = new PDO('mysql:host=localhost;dbname=league_of_friend;charset=utf8', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
} 

// commit
if (isset($_POST['commit'])) {

    // vérification pseudo app existant et non vide
    if (isset($_POST['pseudo_app']) and !empty($_POST['pseudo_app'])) {
        
        // longueur du pseudo trop long
        if (strlen($_POST['pseudo_app']) > 10) {
            $sErrorPseudo = 'Pseudo trop grand, 10 caractères max.';
        }
        
        // bonne longueur de pseudo
        else {

            // email existant et non vide
            if (isset($_POST['email']) and !empty($_POST['email'])) {
                
                // longueur du mail invalide
                if (strlen($_POST['email']) > 255) {
                    $sErrorLogin = 'Mail trop grand, 255 caractères max.';
                }
                
                // bonne longueur de mail
                else {

                    // mdp application existant et non vide
                    if (isset($_POST['mdp_app']) and !empty($_POST['mdp_app'])) {

                        // longueur du mdp trop grand
                        if (strlen($_POST['mdp_app']) > 12) {
                            $sErrorPassword = 'password trop grand, 12 caractères max.';
                        }
                        
                        // bonne longueur de mot de passe
                        else {

                            // confirmation du mdp existant et non vide
                            if (isset($_POST['password_confirm']) and !empty($_POST['password_confirm'])) {

                                //
                                echo "password confirm \n";
                                echo $_POST['password_confirm'];
                                echo "<br>";
                                
                                // mdp == confirmation mdp
                                if ($_POST['mdp_app'] == $_POST['password_confirm']) {
                                    $_SESSION['pseudo_app'] = $_POST['pseudo_app'];

                                    $pass_hache = password_hash($_POST['mdp_app'], PASSWORD_DEFAULT);
                                    
                                    $req = $bdd->prepare('INSERT INTO joueur(pseudo_app, mdp_app, email) VALUES(?, ?, ?)');
                                    $req->execute(array($_POST['pseudo_app'], $pass_hache, $_POST['email']));
                                    
									header('Location: index.php');
                                }
                                
                                // mdp != confirmation mdp
                                else {
                                    $sErrorPasswordComfirm = 'Les mots de passe ne correspondent pas';
                                }
                            }
                            
                            // confirmation mdp - else
                            else {
                                $sErrorPasswordComfirm = 'Password confirm vide.';
                            }

                        }
                    }
                    
                    //mdp - else
                    else {
                        $sErrorPassword = 'Password vide.';
                    }
                }

            }
            
            // email - else
            else {
                $sErrorLogin = 'Mail vide.';
            }
        }

    }
    
    // verif pseudo - else
    else {
        $sErrorPseudo = 'Pseudo vide.';
    }

}
