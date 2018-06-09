<?php
          
 
           $bdd = new PDO('mysql:host=localhost;dbname=projet_webdev;charset=utf8', 'root', '');
                
           
           
           if(isset($_GET['nom']) AND isset($_GET['prenom']))
           {
              //rajouter un if isset
           //coder le mdp
                $mdp_hache = password_hash($_GET['mdp'], PASSWORD_DEFAULT);
                         
                $q = $bdd->prepare('INSERT INTO utilisateur(id,nom,prenom,sexe,mdp,image,email,date_naissance,pseudo,equipe,points) VALUES( ?,?,?,?, ?, ?, ?,?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                $q->execute(array(0,$_GET['nom'],$_GET['prenom'],$_GET['sexe'],$mdp_hache,"",$_GET['email'],$_GET['date_naissance'],$_GET['pseudo'],$_GET['equipe'],0));
                echo "bien enregistré";
                session_start();
                $_SESSION["nom"]=$_GET['nom'];
                $_SESSION["prenom"]=$_GET['prenom'];
                $_SESSION["pseudo"]=$_GET['pseudo'];
                
                //recuperer l'id et creer une variable de session id
               $req = $bdd->prepare('SELECT id FROM utilisateur WHERE pseudo = :pseudo');
                $req->execute(array(
                    'pseudo' => $_GET['pseudo']));
                $resultat = $req->fetch();
                $_SESSION['id'] = $resultat['id'];
                
                
                
           }
           
           
           
            /* tester si image pas trop grande $image_sizes = getimagesize($_FILES['icone']['tmp_name']);
            if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";
           */
           
           
          ///TESTER IMAGE
            // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
            if ( isset($_POST['nom_image']) AND isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
            {
                    
                   echo("envoie en cours");
                    // Testons si le fichier n'est pas trop gros
                    if ($_FILES['monfichier']['size'] <= 1000000)
                    {
                            // Testons si l'extension est autorisée
                            $infosfichier = pathinfo($_FILES['monfichier']['name']);
                            $extension_upload = $infosfichier['extension'];
                            echo $extension_upload;
                            
                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                            if (in_array($extension_upload, $extensions_autorisees))
                            {
                                $i=0;
                                $nom_prenom = $_POST['nom_image'] . $_POST['prenom_image'].".".$extension_upload;
                                //on nomme l'image du meme nom que le mec qui rentre dans le formulaire
                                move_uploaded_file( $_FILES['monfichier']['tmp_name'] , 'upload/'.$nom_prenom);
                               //on va creer une ligne dans la bdd pour aller chercher la bonne image dans le dossier upload
                                $q = $bdd->prepare('INSERT INTO image(id,nom_image) VALUES(?, ?)'); //voir si on fait pas 2 bdd pour la date de naissance
                                $q->execute(array($i,$nom_prenom));
                                echo "bien enregistré";
                                echo "L'envoi a bien été effectué !";
                                session_start();
                                $_SESSION['image'] = $nom_prenom;
                                

                            }
                            else
                            {
                                echo "envoie mal";
                            }
                    }
                   
                    
                 
            }
               
           
           
           
           
           
           
          
           exit();
           
          
?>