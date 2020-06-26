<?php 

session_start();

/*$file = 'public/FichierCompte.json'; 

$data = file_get_contents($file); 

$obj = json_decode($data);*/

try {
    $bdd = new PDO('mysql:host=localhost;dbname=league_of_friend;charset=utf8', 'root', '');
} catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}

/*if (isset($_POST['deco'])) {	
	 $_SESSION = array();
	session_destroy();	
 }*/

?>

<div class="login">
    <link rel="stylesheet" href="css/style4.css">

    <div class="Deconexion">
        <p class="submit"><input type="submit" name="deco" value="Déconexion"></p>
		<a href="index.php"></a>
    </div>

    <div class="touslesroles">
    
        <div class="top">
            <img  id="imgtop" alt="W3Schools" src="css/top.PNG" width="200" height="170" >
        </div>

        <div class="jungle">
            <img  id="imgjungle" alt="W3Schools" src="css/jungle.PNG" width="200" height="170" >

            <?php 
            // accéder à l'élément approprié
            //echo $obj[1]->PseudoLOL,"\n","Niveaux:",$obj[1]->Niveaux,"\n",$obj[1]->ChamionLePlusJouer;
            ?>
        </div>


        <div class="mid">
            <img  id="imgmid" alt="W3Schools" src="css/mid.PNG" width="200" height="170">

            <?php 
            //echo $obj[0]->PseudoLOL,"\n","Niveaux:",$obj[0]->Niveaux,"\n",$obj[0]->ChamionLePlusJouer;
            //$req = $bdd->prepare('SELECT pseudo_lol, niveaux_lol, champion_pref FROM info_lol I, joueur J WHERE I.id = J.id_info_lol');
            $req = $bdd->prepare('SELECT *FROM info_lol INNER JOIN joueur ON info_lol.id = joueur.id_info_lol');
            $req2 = $bdd->prepare('SELECT *FROM joueur INNER JOIN info_lol ON joueur.id_info_lol = info_lol.id');

            $req->execute(['id' => $_SESSION['id']]);
            $data = $req->fetch();

            echo 'pseudo : '.$data['pseudo_lol'].'<br /><br />';
            echo 'champion : '.$data['champion_pref'].'<br /><br />';
            echo 'niveaux : '.$data['niveaux_lol'].'<br /><br />';     
            ?>
        </div>

        <div class="adc">
            <img  id="imgadc" alt="W3Schools" src="css/adc.PNG" width="200" height="170">
            <?php 
            // accéder à l'élément approprié
            //echo $obj[2]->PseudoLOL,"\n","Niveaux:",$obj[2]->Niveaux,"\n",$obj[2]->ChamionLePlusJouer;
            ?>
        </div>


        <div class="supp">
            <img  id="imgsupp" alt="W3Schools" src="css/supp.PNG" width="200" height="170">
        </div>

    </div>

</div>
  
<?php 

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo_app'])) {
    echo 'Bonjour ' . $_SESSION['pseudo_app'];
}

require __DIR__ . "/../footer.php"; 

?>
  