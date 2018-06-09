<?php
    session_start();
?>

<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
       
    
        
    </head>
    <body>
        
            <?php
            
            $bdd = new PDO('mysql:host=localhost;dbname=projet_webdev;charset=utf8', 'root', '');
            
            if(isset($_GET['match1']) AND isset($_GET['match2']) AND isset($_GET['match3']))
            {
              $_SESSION['match1']=$_GET['match1'];
              $_SESSION['match2']=$_GET['match2'];
              $_SESSION['match3']=$_GET['match3'];
              $_SESSION['match4']=$_GET['match4'];
              $_SESSION['match5']=$_GET['match5'];
              $_SESSION['match6']=$_GET['match6'];
              $_SESSION['V_poule_A']=$_GET['groupeA']; //utiliser ceil($_POST['groupeA']); transforme en nombre entier 
              $_SESSION['D_poule_A']=$_GET['deuxgroupeA'];
              //header('Location:Match_Poule_B.php');
              
              
              $matchA=[$_SESSION['match1'],$_SESSION['match2'],$_SESSION['match3'],$_SESSION['match4'],$_SESSION['match5'],$_SESSION['match6']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+1,$matchA[$i]));
                    
               
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"A",$_SESSION['V_poule_A'],$_SESSION['D_poule_A']));       
                
              header('Location:Match_Poule_A.php');
                exit();
                
            }
            
            
            if(isset($_GET['match7']) AND isset($_GET['match8']) AND isset($_GET['match9']))
            {
              $_SESSION['match7']=$_GET['match7'];
              $_SESSION['match8']=$_GET['match8'];
              $_SESSION['match9']=$_GET['match9'];
              $_SESSION['match10']=$_GET['match10'];
              $_SESSION['match11']=$_GET['match11'];
              $_SESSION['match12']=$_GET['match12'];
              $_SESSION['V_poule_B']=$_GET['groupeB'];
              $_SESSION['D_poule_B']=$_GET['deuxgroupeB'];
              
              $matchB=[$_SESSION['match7'],$_SESSION['match8'],$_SESSION['match9'],$_SESSION['match10'],$_SESSION['match11'],$_SESSION['match12']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+7,$matchB[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"B",$_SESSION['V_poule_B'],$_SESSION['D_poule_B']));  
  
              //header('Location:Match_Poule_C.php');
              header('Location:Match_Poule_B.php');
                exit();
            }
            
            
            
            if(isset($_GET['match13']) AND isset($_GET['match14']) AND isset($_GET['match15']))
            {
              $_SESSION['match13']=$_GET['match13'];
              $_SESSION['match14']=$_GET['match14'];
              $_SESSION['match15']=$_GET['match15'];
              $_SESSION['match16']=$_GET['match16'];
              $_SESSION['match17']=$_GET['match17'];
              $_SESSION['match18']=$_GET['match18'];
              $_SESSION['V_poule_C']=$_GET['groupeC'];
              $_SESSION['D_poule_C']=$_GET['deuxgroupeC'];
              
              
              $matchC=[$_SESSION['match13'],$_SESSION['match14'],$_SESSION['match15'],$_SESSION['match16'],$_SESSION['match17'],$_SESSION['match18']];
              
              for($i=0;$i<6;$i++)
              {

                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+13,$matchC[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"C",$_SESSION['V_poule_C'],$_SESSION['D_poule_C'])); 
                header('Location:Match_Poule_C.php');
                //header('Location:Match_Poule_D.php');
                exit();
            }
            
            
            if(isset($_GET['match19']) AND isset($_GET['match20']) AND isset($_GET['match21']))
            {
              $_SESSION['match19']=$_GET['match19'];
              $_SESSION['match20']=$_GET['match20'];
              $_SESSION['match21']=$_GET['match21'];
              $_SESSION['match22']=$_GET['match22'];
              $_SESSION['match23']=$_GET['match23'];
              $_SESSION['match24']=$_GET['match24'];
              $_SESSION['V_poule_D']=$_GET['groupeD'];
              $_SESSION['D_poule_D']=$_GET['deuxgroupeD'];
              
              $matchD=[$_SESSION['match19'],$_SESSION['match20'],$_SESSION['match21'],$_SESSION['match22'],$_SESSION['match23'],$_SESSION['match24']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+19,$matchD[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"D",$_SESSION['V_poule_D'],$_SESSION['D_poule_D'])); 
              
              //header('Location:Match_Poule_E.php');
              header('Location:Match_Poule_D.php');
                exit();
            }
            
            
            if(isset($_GET['match25']) AND isset($_GET['match26']) AND isset($_GET['match27']))
            {
              $_SESSION['match25']=$_GET['match25'];
              $_SESSION['match26']=$_GET['match26'];
              $_SESSION['match27']=$_GET['match27'];
              $_SESSION['match28']=$_GET['match28'];
              $_SESSION['match29']=$_GET['match29'];
              $_SESSION['match30']=$_GET['match30'];
              $_SESSION['V_poule_E']=$_GET['groupeE'];
              $_SESSION['D_poule_E']=$_GET['deuxgroupeE'];
              
              $matchE=[$_SESSION['match25'],$_SESSION['match26'],$_SESSION['match27'],$_SESSION['match28'],$_SESSION['match29'],$_SESSION['match30']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+25,$matchE[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"E",$_SESSION['V_poule_E'],$_SESSION['D_poule_E'])); 
              
              //header('Location:Match_Poule_F.php');
              header('Location:Match_Poule_E.php');
                exit();
            }
            if(isset($_GET['match31']) AND isset($_GET['match32']) AND isset($_GET['match33']))
            {
              $_SESSION['match31']=$_GET['match31'];
              $_SESSION['match32']=$_GET['match32'];
              $_SESSION['match33']=$_GET['match33'];
              $_SESSION['match34']=$_GET['match34'];
              $_SESSION['match35']=$_GET['match35'];
              $_SESSION['match36']=$_GET['match36'];
              $_SESSION['V_poule_F']=$_GET['groupeF'];
              $_SESSION['D_poule_F']=$_GET['deuxgroupeF'];
              
              $matchF=[$_SESSION['match31'],$_SESSION['match32'],$_SESSION['match33'],$_SESSION['match34'],$_SESSION['match35'],$_SESSION['match36']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+31,$matchF[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"F",$_SESSION['V_poule_F'],$_SESSION['D_poule_F'])); 
              
              
              //header('Location:Match_Poule_G.php');
              header('Location:Match_Poule_F.php');
                exit();
            }
            if(isset($_GET['match37']) AND isset($_GET['match38']) AND isset($_GET['match39']))
            {
              $_SESSION['match37']=$_GET['match37'];
              $_SESSION['match38']=$_GET['match38'];
              $_SESSION['match39']=$_GET['match39'];
              $_SESSION['match40']=$_GET['match40'];
              $_SESSION['match41']=$_GET['match41'];
              $_SESSION['match42']=$_GET['match42'];
              $_SESSION['V_poule_G']=$_GET['groupeG'];
              $_SESSION['D_poule_G']=$_GET['deuxgroupeG'];
              
              
              $matchG=[$_SESSION['match37'],$_SESSION['match38'],$_SESSION['match39'],$_SESSION['match40'],$_SESSION['match41'],$_SESSION['match42']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+37,$matchG[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"G",$_SESSION['V_poule_G'],$_SESSION['D_poule_G'])); 
              //header('Location:Match_Poule_H.php');
              header('Location:Match_Poule_G.php');
                exit();
            }
            
            
            if(isset($_GET['match43']) AND isset($_GET['match44']) AND isset($_GET['match45']))
            {
              $_SESSION['match43']=$_GET['match43'];
              $_SESSION['match44']=$_GET['match44'];
              $_SESSION['match45']=$_GET['match45'];
              $_SESSION['match46']=$_GET['match46'];
              $_SESSION['match47']=$_GET['match47'];
              $_SESSION['match48']=$_GET['match48'];
              $_SESSION['V_poule_H']=$_GET['groupeH'];
              $_SESSION['D_poule_H']=$_GET['deuxgroupeH'];
              
              $matchH=[$_SESSION['match43'],$_SESSION['match44'],$_SESSION['match45'],$_SESSION['match46'],$_SESSION['match47'],$_SESSION['match48']];
              
              for($i=0;$i<6;$i++)
              {
                    $q = $bdd->prepare('INSERT INTO matches(id_utilisateur,id_match,prono) VALUES(?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
                    $q->execute(array($_SESSION['id'],$i+43,$matchH[$i]));
        
              }
               
               $q = $bdd->prepare('INSERT INTO poules(id_utilisateur,poule,equipe1,equipe2) VALUES(?,?,?,?)'); //voir si on fait pas 2 bdd pour la date de naissance
               $q->execute(array($_SESSION['id'],"H",$_SESSION['V_poule_H'],$_SESSION['D_poule_H']));
              
              header('Location:Match_Poule_H.php');
              //header('Location:huitieme.php');
                exit();
            }
            
            
            if(isset($_GET['8eme1']) AND isset($_GET['8eme2']) AND isset($_GET['8eme3']))
            {
              $_SESSION['8eme1']=$_GET['8eme1'];
              $_SESSION['8eme2']=$_GET['8eme2'];
              $_SESSION['8eme3']=$_GET['8eme3'];
              $_SESSION['8eme4']=$_GET['8eme4'];
              $_SESSION['8eme5']=$_GET['8eme5'];
              $_SESSION['8eme6']=$_GET['8eme6'];
              $_SESSION['8eme7']=$_GET['8eme7'];
              $_SESSION['8eme8']=$_GET['8eme8'];
              
              
              
              
              
              header('Location:quart.php');
                exit();
            }
            
            if(isset($_GET['quart1']) AND isset($_GET['quart2']) AND isset($_GET['quart3']))
            {
              $_SESSION['quart1']=$_GET['quart1'];
              $_SESSION['quart2']=$_GET['quart2'];
              $_SESSION['quart3']=$_GET['quart3'];
              $_SESSION['quart4']=$_GET['quart4'];
              
              
              
              
              header('Location:demi.php');
                exit();
            }
            
            if(isset($_GET['demi1']) AND isset($_GET['demi2']) )
            {
              $_SESSION['demi1']=$_GET['demi1'];
              $_SESSION['demi2']=$_GET['demi2'];
                        //petite finale
                        if($_GET['demi1'] === $_SESSION['quart2'])
                        {
                            $_SESSION['demi3']=$_SESSION['quart1'];
                        }
                        else
                        {
                            $_SESSION['demi3']=$_SESSION['quart2'];
                        }
                        
                        if($_GET['demi2'] === $_SESSION['quart3'])
                        {
                            $_SESSION['demi4']=$_SESSION['quart4'];
                        }
                        else
                        {
                            $_SESSION['demi4']=$_SESSION['quart3'];
                        }
                        
              header('Location:finale.php');
                exit();
            }
            
            if(isset($_GET['finale1']) AND isset($_GET['finale2']) )
            {
              $_SESSION['vainqueur']=$_GET['finale1'];
              $_SESSION['3eme']=$_GET['finale2'];
                        //2nd et 4eme
                        if($_GET['finale1'] === $_SESSION['demi1'])
                        {
                            $_SESSION['second']=$_SESSION['demi2'];
                        }
                        else
                        {
                            $_SESSION['second']=$_SESSION['demi1'];
                        }
                        
                        if($_GET['finale2'] === $_SESSION['demi3'])
                        {
                            $_SESSION['quatrieme']=$_SESSION['demi4'];
                        }
                        else
                        {
                            $_SESSION['quatrieme']=$_SESSION['demi3'];
                        }
              
                header('Location:Merci.php');
                exit();
            }
            
              
            ?>
        
    </body>
</html>    
