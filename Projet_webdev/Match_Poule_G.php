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
                    <h1> GROUPE G</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Belgique <input name="match37" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match37" type="radio" value="2"/>2.05€</td>
                                <td><input name="match37" type="radio" value="3"/>2.85€</td><td>Panama</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Tunisie<input name="match38" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match38" type="radio" value="2"/>2.05€</td>
                                <td><input name="match38" type="radio" value="3"/>1.85€</td><td>Angleterre</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Belgique<input name="match39" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match39" type="radio" value="2"/>2.05€</td>
                                <td><input name="match39" type="radio" value="3"/>3.1</td><td>Tunisie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Angleterre<input name="match40" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match40" type="radio" value="2"/>2.05€</td>
                                <td><input name="match40" type="radio" value="3"/>3.1</td><td>Panama</td>
                                
                            </tr>
                            <tr>
                               
                                <td>Panama<input name="match41" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match41" type="radio" value="2"/>2.05€</td>
                                <td><input name="match41" type="radio" value="3"/>3.1</td><td>Tunisie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Angleterre<input name="match42" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match42" type="radio" value="2"/>2.05€</td>
                                <td><input name="match42" type="radio" value="3"/>3.1</td><td>Belgique</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe G : 
                            
                            <select id="Groupe_G" name="groupeG">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Angleterre">Angleterre</option>
                              <option value="Belgique">Belgique</option>
                              <option value="Panama">Panama</option>
                              <option value="Tunisie">Tunisie</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe G : 
                            
                            <select id="Groupe_G" name="deuxgroupeG">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Angleterre">Angleterre</option>
                              <option value="Belgique">Belgique</option>
                              <option value="Panama">Panama</option>
                              <option value="Tunisie">Tunisie</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
                
        <div>
            <?php
                if(isset($_SESSION['match37']) AND isset($_SESSION['match38']) AND isset($_SESSION['match39'])  AND isset($_SESSION['match40']) AND isset($_SESSION['match41']) AND isset($_SESSION['match42']) AND isset($_SESSION['V_poule_G']) AND isset($_SESSION['D_poule_G']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule H";
                }
            ?>
        </div>    

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>
