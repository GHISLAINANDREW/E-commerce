<!Doctype html>
<html>
  <head>        
   	<title>Mon Site</title>  
      <link href="inc/css/style.css" type="text/css" rel="stylesheet">      
   	<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css">    
   </head>    
   <body>            
   	<header>            
   		<div class="conteneur">               
   		 <div style=" display: block; position: left;color: green">                    
   		 	<a href="#" title="Mon Site">BOOM MARKET NETWORK</a>                
   		 </div>                
   		 <nav> 

   		 	 <?php                    
   		 	 if(internauteEstConnecteEtEstAdmin())                   
   		 	  {   
                 echo '<a href="' . '../profil.php">Voir votre profil</a>';                        
                        echo '<a href="' . '../boutique.php">Accès à la boutique</a>';                        
                        echo '<a href="' . '../panier.php">Voir votre panier</a>';                        
                        echo '<a href="' . '../connexion.php?action=deconnexion">Se déconnecter</a>';                                                               
   		 	     echo '<a href="' . 'admin/gestion_boutique.php">Gestion de la boutique</a>'; 
   		 	  echo' <a href="javascript:alert('Coucou !!')">Mon Lien</a>';
   		 	     
   		 	      }                    
   		 	      if(internauteEstConnecte())                    
   		 	      	{                        
   		 	      		echo '<a href="' . '/profil.php">Voir votre profil</a>';                        
   		 	      		echo '<a href="' . '/boutique.php">Accès à la boutique</a>';                        
   		 	      		echo '<a href="' . '/panier.php">Voir votre panier</a>';                        
   		 	      		echo '<a href="' . '/connexion.php?action=deconnexion">Se déconnecter</a>';                    
   		 	      	}                    else                   
   		 	      		 {                       
   		 	      		  echo '<a href="' .  'inscription.php">Inscription</a>';                        
   		 	      		  echo '<a href="' .  'connexion.php">Connexion</a>';                        
   		 	      		  echo '<a href="' . 'boutique.php">Accès à la boutique</a>';                        
   		 	      		  echo '<a href="' . 'panier.php">Voir votre panier</a>';                    
   		 	      		}                    
   		 	      		?>                
   		</nav>           
   		 </div>        
   		</header>        
   		<section>           
   		 <div class="conteneur">