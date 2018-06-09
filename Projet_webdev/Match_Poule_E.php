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
                    <h1> GROUPE E</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Costa Rica<input name="match25" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match25" type="radio" value="2"/>2.05€</td>
                                <td><input name="match25" type="radio" value="3"/>2.85€</td><td>Serbie</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Bresil<input name="match26" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match26" type="radio" value="2"/>2.05€</td>
                                <td><input name="match26" type="radio" value="3"/>1.85€</td><td>Suisse</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Bresil<input name="match27" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match27" type="radio" value="2"/>2.05€</td>
                                <td><input name="match27" type="radio" value="3"/>3.1</td><td>Costa Rica</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Serbie<input name="match28" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match28" type="radio" value="2"/>2.05€</td>
                                <td><input name="match28" type="radio" value="3"/>3.1</td><td>Suisse</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Serbie<input name="match29" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match29" type="radio" value="2"/>2.05€</td>
                                <td><input name="match29" type="radio" value="3"/>3.1</td><td>Bresil</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Suisse<input name="match30" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match30" type="radio" value="2"/>2.05€</td>
                                <td><input name="match30" type="radio" value="3"/>3.1</td><td>Costa Rica</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe E : 
                            
                            <select id="Groupe_E" name="groupeE">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Serbie">Serbie</option>
                              <option value="Suisse">Suisse</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Bresil">Bresil</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe E : 
                            
                            <select id="Groupe_E" name="deuxgroupeE">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Serbie">Serbie</option>
                              <option value="Suisse">Suisse</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Bresil">Bresil</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
        <div>
            <?php
                if(isset($_SESSION['match25']) AND isset($_SESSION['match26']) AND isset($_SESSION['match27'])  AND isset($_SESSION['match28']) AND isset($_SESSION['match29']) AND isset($_SESSION['match30']) AND isset($_SESSION['V_poule_E']) AND isset($_SESSION['D_poule_E']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule F";
                }
            ?>
        </div>             
               

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>