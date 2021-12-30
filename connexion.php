<?php require_once("inc/init.inc.php");
     require_once("fonction.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(isset($_GET['action']) && $_GET['action'] == "deconnexion")
	{    session_destroy();
	}if(internauteEstConnecte())
	{    header("location:profil.php");
}
if($_POST)
	{
	    //
	     $contenu .=  "pseudo : " . $_POST['pseudo'] . "<br>mdp : " .  $_POST['mdp'] . "";
	         $resultat = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
	             if($resultat->num_rows != 0)
	         {        //
	          $contenu .=  '<div style="background:green">pseudo connu!</div>';        $membre = $resultat->fetch_assoc();        if($membre['mdp'] == $_POST['mdp'])
	                  {
	                              //
	                  	$contenu .= '<div class="validation">mdp connu!</div>';            foreach($membre as $indice => $element)            {                if($indice != 'mdp')                {                    $_SESSION['membre'][$indice] = $element;                }            }            header("location:profil.php");        }        else        {            $contenu .= '<div class="erreur">Erreur de MDP</div>';        }           }    else    {        $contenu .= '<div class="erreur">Erreur de pseudo</div>';    }}
	                  	//--------------------------------- AFFICHAGE HTML ---------------------------------//
	                  	?>
	                  	<?php require_once("inc/haut.inc1.php"); ?><?php echo $contenu; ?>
                <html>
                    <head>
                        <script type="text/javascript" defer src="inc/js/js1.js"></script>
                    </head>
                    <body>
	                  	 <div class="wrapper fadeInDown">
                           <div id="formContent">
	                  	 <div class="fadeIn first">
                                <img src="images/user_image.png" id="icon" alt="User Icon" />
                         </div>
	                  	 <form method="post" action="" name="form" onsubmit="valider1()">
	                  	            <input type="text" id="pseudo" class="fadeIn second" name="pseudo" placeholder="votre login">
	                  	            <input type="password" id="mdp"class="fadeIn third" name="mdp" placeholder="password">
	                  	            <input type="submit">
                         </form>
                             <a href="./recuperation_compte.php" style="color: purple;"><u>mot de passe oublier?</u></a>
                         </form>
                           </div>
                          </div>
                    </body>
                </html>
	                  	  <?php require_once("inc/bas.inc.php");
	                  	 ?>