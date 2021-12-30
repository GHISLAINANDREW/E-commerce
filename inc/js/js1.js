
//fonction pour valider la connexion
function valider1()
{
        var nom=document.getElementById("pseudo");
        var mdp=document.querySelector("#mdp");
       // var mes=document.getElementById("mes");
        if(nom.value == ""){ nom.focus();
            alert("yaaa");

            return false;
        }
        else
            {
            alert("good");
            return true;
        }
        if(mdp.value ==""){
            alert("renseigner ce champs");
            mdp.focus();
            return false;
        }
        if(mdp.value.length < 8) {
            alert("mot de passe invalide");
            mdp.focus();
            return false;
        }

}