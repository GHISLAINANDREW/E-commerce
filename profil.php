<?php
require_once("inc/init.inc.php");
require_once("fonction.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte()) header("location:connexion.php");
//debug($_SESSION);
$contenu .= '<p class="centre">Bonjour <strong>' . $_SESSION['membre']['pseudo'] . '</strong></p>';
$contenu .= '<div class="cadre"><h2> Voici vos informations </h2>';
$contenu .= '<p> votre email est: ' . $_SESSION['membre']['email'] . '<br>';$contenu .= 'votre ville est: ' . $_SESSION['membre']['ville'] . '<br>';$contenu .= 'votre cp est: ' . $_SESSION['membre']['code_postal'] . '<br>';$contenu .= 'votre adresse est: ' . $_SESSION['membre']['adresse'] . '</p></div><br><br>';
//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/haut.inc3.php");
echo "
  <div class=\"wrapper fadeInDown\">
            <div id=\"formContent\">
$contenu
 </div>
        </div>
  ";
require_once("inc/bas.inc.php"); 
?>