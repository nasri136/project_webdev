///VERIF DATES mois jour pour stocker en sql sous format : 2010-04-02 fin jpa
//







//AJAX
function getXMLHttpRequest() 
{      
	var xhr = null; 
		if (window.XMLHttpRequest || window.ActiveXObject) { 
			if (window.ActiveXObject) { 
				try { 
					xhr = new ActiveXObject("Msxml2.XMLHTTP"); 
				} catch(e) { 
					xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
				} 
			} else { 
				xhr = new XMLHttpRequest(); 
			} 
		} else { 
			alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest..."); 
			return null; 
		} 
	return xhr; 
}


 var tableau_input_varchar=["nom","prenom","mdp","confmdp","pseudo","email"];  
 var tableau_input_select=["sexe","birthday","prefere","age"];
 var sexe="";
function verif()
{
    
    alerte = "Paramètre manquants ou erronées : ";
    var mdp_correspondant=0;
    var varchar_bon=0;
    var email_bon=0;
    var age_bon =0;
    
    var date_naissance=0;
    var prefere=0;
    
    var nom = document.forms["inscription"]["nom"].value;
    var prenom = document.forms["inscription"]["prenom"].value;
    var mdp = document.forms["inscription"]["mdp"].value;
    var conf_mdp = document.forms["inscription"]["conf_mdp"].value;
    var email = document.forms["inscription"]["email"].value;
    var pseudo = document.forms["inscription"]["pseudo"].value;
    var check_mr = document.forms['inscription']["check_mr"].checked;
    
    
    var check_mme = document.forms['inscription']["check_mme"].checked;
    
    
    var jour_naissance= document.forms["inscription"]["jour"].value;
    var mois_naissance = document.forms["inscription"]["mois"].value;
    var annee_naissance = document.forms["inscription"]["annee"].value;
    
    var equipe=recup_value_equipe();
    
    var age = document.forms['inscription']["check_age"].checked;
    
   
    
    
    
    var tab_var_char=[nom,prenom,mdp,conf_mdp,pseudo];
    var tab_var_char_alerte=["Nom","/Prenom","/Mot de passe","/Confirmation mot de passe","/Pseudo"];
    
    //verif du mdp et de la conf mdp semblable
    if(mdp !== conf_mdp)
    {
        alerte= alerte + "Mot de passe non correspondant";
    }
    else
    {
       mdp_correspondant=1;
    }
    
    //verif des variable de type varchar
    for(var i = 0; i<tab_var_char.length;i++)
    {
        if(verif_varchar(tab_var_char[i]) !== 1)
        {
            alerte=alerte + " " +tab_var_char_alerte[i];
            surligne(true,i);
        }
        else
        {
            varchar_bon++;
            surligne(false,i);
        }
    }
    
    
    //verif email
    if(verif_email(email)===1)
    {
        email_bon=1;
        surligne(false,5);
    }
    else
    {
        alerte = alerte + " /Email";
        surligne(true,5);
    }
    
    //verif du sexe
    if( check_mr !== check_mme)
    {
        surligne_select(false,0);
        if(check_mr===true)
        {
            sexe = "homme"; //homme
        }
        else
        {
            sexe = "femme";//femme
        }
    }
    else
    {
        surligne_select(true,0);
        alerte = alerte + " /Sexe";
        
    }
    
    
        
    //verif date naissance 
    if(jour_naissance !== "" && mois_naissance !== "" && annee_naissance !== " ")
    {
        surligne_select(false,1);
        date_naissance=1;
    }
    else
    {
        surligne_select(true,1);
        alerte = alerte + " Date de naissance";
          
    }
    
    //verif choix equipe 
    if( equipe !== "")
    {
        surligne_select(false,2);
         prefere=1;
    }
    else
    {
        surligne_select(true,2);
        alerte = alerte + " Equipe préféré(e)";
       
    }
    
    if(age === true)
    {
        age_bon=1;
        surligne_select(false,3);
    }
    else
    {
        alerte=alerte + " /Age";
        surligne_select(true,3);
    }
    
    
     
    if(age_bon ===1 && prefere === 1 && date_naissance === 1 &&sexe !== "" && email_bon === 1 && varchar_bon === 5 &&  mdp_correspondant === 1)
    {
        alert('cest bon');
        request(readData); 
        return false;
    }
    else
    {
        alert(alerte);
        return false;
    }
    
}



function verif_email(saisie)
{
    var pattern = /^[a-z0-9.-]{2,}@+[a-z0-9.-]{2,}$/i; //utilisation regex pr check email inscription
 
    if (pattern.test(saisie))
    {
        
        return 1;
    }
    else
    {
       
        return 0;
    }
}
function recup_value_equipe()
{
    select = document.getElementById("equipe_foot");
    choice = select.selectedIndex;  // Récupération de l'index du <option> choisi

    valeur_cherche = select.options[choice].value; 
    return valeur_cherche;
}










function verifFloat(champ)
{

    var verif= parseFloat(champ);
    
    if(isNaN(verif) || verif <0 || verif > 100000000000)
    {
        return 0;      
    }
    else
    {
       return 1;
    }
}

function verif_varchar(champ)
{
   
    
    if(champ.length < 4 || champ.length > 50)
   {
     
      return 0;
     
   }
   else
   {
      return 1;
      
   }
}


function surligne(champ,i)
{
    
    
    if(champ)
    {
        document.getElementById(tableau_input_varchar[i]).style.color= "#fba";        
    }
    else
    {
        document.getElementById(tableau_input_varchar[i]).style.color="";       
    }
}

function surligne_select(champ,i)
{
    
    
    if(champ)
    {
        document.getElementById(tableau_input_select[i]).style.color= "#fba";        
    }
    else
    {
        document.getElementById(tableau_input_select[i]).style.color="";       
    }
}


function request(callback) 
{           
                        
                    
                    
                        
                    var nom = document.forms["inscription"]["nom"].value;
                    var nom_a = encodeURIComponent(nom);
                    var prenom = document.forms["inscription"]["prenom"].value;
                     var prenom_a = encodeURIComponent(prenom);
                    var mdp = document.forms["inscription"]["mdp"].value;
                     var mdp_a = encodeURIComponent(mdp);
                    
                    var email = document.forms["inscription"]["email"].value;
                    var email_a = encodeURIComponent(email);
                    var pseudo = document.forms["inscription"]["pseudo"].value;
                    var pseudo_a = encodeURIComponent(pseudo);
                    
                    var jour_naissance= document.forms["inscription"]["jour"].value;
                    
                    var mois_naissance = document.forms["inscription"]["mois"].value;
                    var annee_naissance = document.forms["inscription"]["annee"].value;
                    var date_naissance = encodeURIComponent(jour_naissance+"/"+mois_naissance+"/"+annee_naissance);
                    
                    
                   


                    

                    var pseudo = document.forms["inscription"]["pseudo"].value;
                    var pseudo_a = encodeURIComponent(pseudo);
                    var equipe= recup_value_equipe();
                    alert(sexe + " " + prenom_a +" "+ nom_a + " "+ mdp_a + " "+ date_naissance + " "+ pseudo_a + " "+equipe );
                    
                        
                    //envoyer nom,prenom,mdp,email,pseudo,date_naissance,pseudo,equipe
                        
			var xhr = getXMLHttpRequest(); 
			xhr.onreadystatechange = function() { 
				if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0))// si la page php a recuperer ses donnée
				 { 
					callback(xhr.responseText); //on envoie les données textuelles récupérées à read date
				} 
			}; 
			
			xhr.open("GET", "validation_inscription.php?nom=" + nom_a + "&prenom="+ prenom_a + "&sexe=" + sexe + "&mdp=" + mdp_a  + "&email=" + email_a + "&date_naissance=" + date_naissance  + "&pseudo=" + pseudo_a + "&equipe=" + equipe , true); 
			xhr.send(null); 
                       
} 


function readData(sData) 
{ 
			alert("non");
                        
			//va recuperer element et créer une div ou quelque chose pour créer quelque chose
} 

