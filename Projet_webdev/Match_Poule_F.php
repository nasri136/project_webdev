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
         <form metho="post" name="pronos"  action="validation_prono.php" >
            <div id="Pronos">
                <div class="carre">
                    <h1> GROUPE F</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Allemagne <input name="match31" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match31" type="radio" value="2"/>2.05€</td>
                                <td><input name="match31" type="radio" value="3"/>2.85€</td><td>Mexique</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Suède<input name="match32" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match32" type="radio" value="2"/>2.05€</td>
                                <td><input name="match32" type="radio" value="3"/>1.85€</td><td>Corée du Sud</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Corée du Sud<input name="match33" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match33" type="radio" value="2"/>2.05€</td>
                                <td><input name="match33" type="radio" value="3"/>3.1</td><td>Mexique</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Allemagne<input name="match34" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match34" type="radio" value="2"/>2.05€</td>
                                <td><input name="match34" type="radio" value="3"/>3.1</td><td>Suède</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Corée du Sud<input name="match35" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match35" type="radio" value="2"/>2.05€</td>
                                <td><input name="match35" type="radio" value="3"/>3.1</td><td>Allemagne</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Mexique<input name="match36" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match36" type="radio" value="2"/>2.05€</td>
                                <td><input name="match36" type="radio" value="3"/>3.1</td><td>Suède</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe F : 
                            
                            <select id="Groupe_F" name="groupeF">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Corée du Sud">Corée du Sud</option>
                              <option value="Suède">Suède</option>
                              <option value="Mexique">Mexique</option>
                              <option value="Allemagne">Allemagne</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe F : 
                            
                            <select id="Groupe_F" name="deuxgroupeF">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Corée du Sud">Corée du Sud</option>
                              <option value="Suède">Suède</option>
                              <option value="Mexique">Mexique</option>
                              <option value="Allemagne">Allemagne</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
                
         <div>
            <?php
                if(isset($_SESSION['match31']) AND isset($_SESSION['match32']) AND isset($_SESSION['match33'])  AND isset($_SESSION['match34']) AND isset($_SESSION['match35']) AND isset($_SESSION['match36']) AND isset($_SESSION['V_poule_F']) AND isset($_SESSION['D_poule_F']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule G";
                }
            ?>
        </div>         

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>
