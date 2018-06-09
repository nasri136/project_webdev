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
                    <h1> GROUPE B</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Maroc<input name="match7" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match7" type="radio" value="2"/>2.05€</td>
                                <td><input name="match7" type="radio" value="3"/>2.85€</td><td>Iran</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Portugal<input name="match8" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match8" type="radio" value="2"/>2.05€</td>
                                <td><input name="match8" type="radio" value="3"/>1.85€</td><td>Espagne</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Portugal<input name="match9" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match9" type="radio" value="2"/>2.05€</td>
                                <td><input name="match9" type="radio" value="3"/>3.1</td><td>Maroc</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Iran<input name="match10" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match10" type="radio" value="2"/>2.05€</td>
                                <td><input name="match10" type="radio" value="3"/>3.1</td><td>Espagne</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Iran<input name="match11" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match11" type="radio" value="2"/>2.05€</td>
                                <td><input name="match11" type="radio" value="3"/>3.1</td><td>Portugal</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Espagne<input name="match12" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match12" type="radio" value="2"/>2.05€</td>
                                <td><input name="match12" type="radio" value="3"/>3.1</td><td>Maroc</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe B : 
                            
                            <select id="Groupe_B" name="groupeB">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Maroc">Maroc</option>
                              <option value="Iran">Iran</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Espagne">Espagne</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe B : 
                            
                            <select id="Groupe_B" name="deuxgroupeB">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Maroc">Maroc</option>
                              <option value="Iran">Iran</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Espagne">Espagne</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
        <div>
            <?php
                if(isset($_SESSION['match7']) AND isset($_SESSION['match8']) AND isset($_SESSION['match9'])  AND isset($_SESSION['match10']) AND isset($_SESSION['match11']) AND isset($_SESSION['match12']) AND isset($_SESSION['V_poule_B']) AND isset($_SESSION['D_poule_B']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule C";
                }
            ?>
        </div>     
                
        <script src="javascript.js"></script>  
    </body>
</html>