<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                            <tr>
                               
                                Match : Iran / Maroc resultat = Maroc <br /><br />
                                
                            </tr>
                            
                            
        Tableau des classements : 
        <?php
            
            $bdd = new PDO('mysql:host=localhost;dbname=projet_webdev;charset=utf8', 'root', '');
            
            
            
            
            //test
            $resultat=[1,3,3,1,1,1,3,1,2,1,2,3,2,1,3,1,2,3,1,3,2,2,1,2,3,1,2,3,3,2,1,2,2,2,1,2,2,1,2,2,2,2,1,2,1,2,1,2];
                    // 1,1,2,1,2,2,1,1,1,2,3,3,1,1,1,1,1,1,1,2,2,2,3,3,1,2,2,3,3,3,1,3,3,3,2,2,1,1,1,1,1,1,1,1,1,1,1,1,
            $utilisateur_id=[];
            $utilisateur_pseudo=[];
            $utilisateur_points=[];
            $utilisateur_points_update=[];
            $prono_id=[];
            $prono_id_match=[];
            $prono_prono=[];
                   
           
           
            
            
            
            $q = $bdd->query('SELECT id , pseudo , points FROM utilisateur ORDER BY points');
            $p = $bdd->query('SELECT id_utilisateur,id_match,prono FROM matches ');
            //recup bdd utilisateur
            while($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                array_push($utilisateur_id,$donnees['id']);               
                array_push($utilisateur_pseudo,$donnees['pseudo']);
                array_push($utilisateur_points,$donnees['points']);
                  
            }
            //recup bdd des pronos
            while($donnees2 = $p->fetch(PDO::FETCH_ASSOC))
            {
                array_push($prono_id,$donnees2['id_utilisateur']);
                array_push($prono_id_match,$donnees2['id_match']);
                array_push($prono_prono,$donnees2['prono']);
            }
            
            echo "<br />";
            
            for($y=0;$y<count($utilisateur_id);$y++)
            {
                echo "Pseudo : ".$utilisateur_pseudo[$y]." /Points : ".$utilisateur_points[$y];
            }
            
            
            //accordage des points
            
           
           
            //pour tout les joueurs donc on compte le nombre d'id
            for($i=0 ; $i<count($utilisateur_id);$i++)
            {
                
                $match_cursor=0;
                echo "<br />". $utilisateur_id[$i];
                echo  "<br />".$prono_id[$match_cursor];
                
                //chaque fois que id(table utilisateur) === id(table pronos) et qu'on depasse pas tab_pronos 
                
                while( $match_cursor<48 AND $utilisateur_id[$i]===$prono_id[$match_cursor] )
                {
                    
                         
                    echo "<br />"." id_match : ".$prono_id_match[$match_cursor];
                    echo "<br /> mathc cursor: ".($match_cursor+1);
                    echo  "<br /> Prono : ".$prono_prono[$match_cursor];
                    echo "<br />Resultat du match : ".$resultat[$match_cursor];
                   
                    
                    //si le match et le pronos correspondent
                    
                    if($prono_id_match[$match_cursor]== ($match_cursor+1) AND $prono_prono[$match_cursor]==$resultat[$match_cursor])
                    {
                        $utilisateur_points[$i]=$utilisateur_points[$i] + 3; //distribution de points 
                        $utilisateur_points_update[$i]=$utilisateur_points[$i];
                        echo "<br />points : wesh <br />" .$utilisateur_points[$i];
                        //chaque fois qu'on réitianalise on prend 3 points
                    }
                    //update 
                    $match_cursor++;
                    echo "<br /><br />";
                }
                
                
                
                
              
               
               
               
               $q = $bdd->prepare('UPDATE utilisateur SET points = :points  WHERE id = :id');  
                for($i=0;$i<count($utilisateur_id);$i++)
                {
                    $q->execute(array(
                        'id'=> $utilisateur_id[$i], //faire gaffe de reinitialisé la bdd 
                        'points'=> $utilisateur_points_update[$i]                        
                        ));
                    
                }
                
            }            
            
            
        ?>

    </body>
</html>


              