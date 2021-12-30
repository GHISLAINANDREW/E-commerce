<?php
require_once("inc/init.inc.php");
require_once("fonction.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
//--- AFFICHAGE DES CATEGORIES ---//


$contenu .=" <body style='background-color: #DDDDDD '>";
$categories_des_produits = executeRequete("SELECT DISTINCT categorie FROM produit");
$contenu .= '<div class="boutique-gauche" style="position: fixed;top: 7%;left: 0;width: 18%;height: 87%">';
     $contenu .= "<ul> <h1><u> CATEGORIES </u> </h1><h2 class='active'>";
           while($cat = $categories_des_produits->fetch_assoc())
     {
      $contenu .= "<br> <li><a href='?categorie=" . $cat['categorie'] . "'>" . $cat['categorie'] . "</a></li>";}
      $contenu .= "</ul>";$contenu .= "</div>";
     //--- AFFICHAGE DES PRODUITS ---//
     $contenu .= '<div class="boutique-droite" style="padding-left: 19%;padding-top: 2%">';
     if(isset($_GET['categorie'])){
      $donnees = executeRequete("select id_produit,reference,titre,photo,prix from produit where categorie='$_GET[categorie]'");
      while($produit = $donnees->fetch_assoc())
      {
          $contenu .= '<div class="boutique-produit" style=" -webkit-animation-duration: 2s ;border-bottom-width:15px;border-color: #DDDDDD">';
          $contenu .= "<h5>$produit[titre]</h5>";
          $contenu .= "<a href=\"fiche_produit.php?id_produit=$produit[id_produit]\"><img style='border-right-width: 1556px;-webkit-border-radius:12px 10px 10px 20px' src=\"$produit[photo]\" =\"130\" height=\"100\"></a>";
          $contenu .= "<p>$produit[prix] FCFA</p>";
          $contenu .= '<a href="fiche_produit.php?id_produit=' . $produit['id_produit'] . '"></a>';
          $contenu .= '</div>';
      }
     }
     else
     {
         $donnees = executeRequete("select id_produit,reference,titre,photo,prix from produit");
         while($produit = $donnees->fetch_assoc())
         {
             $contenu .= '<div class="boutique-produit" style=" -webkit-animation-duration: 2s ;border-bottom-width:15px;border-color: #DDDDDD">';
             $contenu .= "<h5>$produit[titre]</h5>";
             $contenu .= "<a href=\"fiche_produit.php?id_produit=$produit[id_produit]\"><img style='border-right-width: 1556px;-webkit-border-radius:12px 10px 10px 20px' src=\"$produit[photo]\" =\"130\" height=\"100\"></a>";
             $contenu .= "<p>$produit[prix] FCFA</p>";
             $contenu .= '<a href="fiche_produit.php?id_produit=' . $produit['id_produit'] . '"></a>';
             $contenu .= '</div>';
         }
     }
    // $contenu .= '<h2 id="compteur">il y a '.compter().' visiteurs en ligne</h2i></div>';
     $contenu .='</body>';

     //--------------------------------- AFFICHAGE HTML ---------------------------------//
     require_once("inc/haut.inc3.php");

     echo  $contenu;
   /*  function update($pdo){
         $pdo->exec("DELETE FROM visiteur WHERE heure_requete<".(time()-(10*60)));
     }
     function connecter(){
         try{
             $pdo=new PDO("mysql:host=localhost;dbname=site","root","");
                 return $pdo;
         }catch (Exception $e){echo "echec de la connection";}
     }
     function compter(){
         $pdo=connecter();
         addvisitor($pdo);
         update($pdo);
         $requete=$pdo->query("SELECT COUNT(*) AS total FROM visiteur");
         if($ligne=$requete->fetch()){
             return $ligne['total'];
         }
         return 0;
     }
     /*function compte(){
         var valeur=getcompter();
         document.getElementById('compteur')innerHTML='il y a désormais'+val+'visiteur en ligne';

     }
     setInterval(compte,2000);*/
    /* function addvisitor($pdo){
    $requete = $pdo->query("SELECT * FROM visiteur WHERE (addr_ip = ".$_SERVER['REMOTE_ADDR'].")");

         $pdo->exec("UPDATE visiteur SET heure_requete=".time()." WHERE (addr_ip=".SERVER['REMOTE_ADDR']."))");
         return;
$pdo->exec("INSERT INTO visiteur(addr_ip, heure_requete) VALUES (".$_SERVER['REMOTE_ADDR'].",".time()."),");

     }*/

     require_once("inc/bas.inc.php");
?>
