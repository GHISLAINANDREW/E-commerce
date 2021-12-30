<?php
require_once("inc/init.inc.php");

require_once("fonction.inc.php");
?>
<html>
<head>
     <link href="inc/css/style3.css" type="text/css" rel="stylesheet">  
    <title>
        recupération du compte
    </title>

</head>
<body style="background-color: #6f42c1; font-family: Verdana">
<div class="wrapper fadeInDown" style="background-color: #6f42c1">
    <div id="formContent">
<h3 style="color: #1b1e21"> RECUPERATION DU MOT DE PASSE</h3>
<div class="fadeIn first">
    <img src="images/user_image2.jpg" id="icon" alt="User Icon" >
</div>
<form method="post" action="" id="formulaire" >
    <label for="email" class="sr-only-focusable"></label>
    <input type="text" class="form-control" id="email"  id="email" name="email" required=autofocus placeholder="exemple@gmail">
    <input type="submit" onclick="mafonction()" value="recupére son compte" name="valider">
    <a href="mailto:ghostphenix@gmail.com">envoyer nous un mail</a>
</form>
        <script>
            function mafonction() {
                var val=document.getElementById("formulaire");
                var s = getTooltip(document.formulaire.mail);
               alert(s);
            }
        </script>
</div>
<?php
if( isset($_POST['valider'])){
    echo " <h3 style='color: lawngreen'>un mot de passe de reinitialisation vous a été envoyé </h3> ";
}
?>
<?php require_once("inc/bas.inc.php");
?>

</body>
</html>
