<?php
    session_start();
?>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="PronosticFoot.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
        
    </head>
    <body>
        <?php
            if (isset($_SESSION['pseudo']))
            {
                echo "Bonjour ". $_SESSION['pseudo'];
            }
        ?>
         <form metho="post" name="pronos"  action="validation_prono.php" >
            <div id="Pronos">
                <div class="carre">
                    <h1> GROUPE A</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Russie<input name="match1" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match1" type="radio" value="2"/>2.05€</td>
                                <td><input name="match1" type="radio" value="3"/>2.85€</td><td>Arabie Saoudite</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Egypte<input name="match2" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match2" type="radio" value="2"/>2.05€</td>
                                <td><input name="match2" type="radio" value="3"/>1.85€</td><td>Uruguay</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Russie<input name="match3" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match3" type="radio" value="2"/>2.05€</td>
                                <td><input name="match3" type="radio" value="3"/>3.1</td><td>Egypte</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Uruguay<input name="match4" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match4" type="radio" value="2"/>2.05€</td>
                                <td><input name="match4" type="radio" value="3"/>3.1</td><td>Arabie Saoudite</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Uruguay<input name="match5" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match5" type="radio" value="2"/>2.05€</td>
                                <td><input name="match5" type="radio" value="3"/>3.1</td><td>Russie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Arabie Saoudite<input name="match6" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match6" type="radio" value="2"/>2.05€</td>
                                <td><input name="match6" type="radio" value="3"/>3.1</td><td>Egypte</td>
                                
                            </tr>
                        </table>
                    
                        <div>
                            Gagnant groupe A : 
                            
                            <select id="Groupe_A" name="groupeA">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Russie">Russie</option>
                              <option value="Arabie Saoudite">Arabie Saoudite</option>
                              <option value="Egypte">Egypte</option>
                              <option value="Uruguay">Uruguay</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe A : 
                            
                            <select id="Groupe_A" name="deuxgroupeA">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Russie">Russie</option>
                              <option value="Arabie Saoudite">Arabie Saoudite</option>
                              <option value="Egypte">Egypte</option>
                              <option value="Uruguay">Uruguay</option>
                            </select>
                            
                        </div>
                        
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
                
            </div>
        </form>
  
                
               
        <div>
            <?php
                if(isset($_SESSION['match1']) AND isset($_SESSION['match2']) AND isset($_SESSION['match3'])  AND isset($_SESSION['match4']) AND isset($_SESSION['match5']) AND isset($_SESSION['match6']) AND isset($_SESSION['V_poule_A']) AND isset($_SESSION['D_poule_A']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule B : ";
                
                
            ?>
                <a href="Match_Poule_B.php"> poule B </a>;
            <?php
                }
            ?>
        </div>
          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>
