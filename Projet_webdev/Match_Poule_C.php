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
                    <h1> GROUPE C</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> France<input name="match13" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match13" type="radio" value="2"/>2.05€</td>
                                <td><input name="match13" type="radio" value="3"/>2.85€</td><td>Australie</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Perou<input name="match14" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match14" type="radio" value="2"/>2.05€</td>
                                <td><input name="match14" type="radio" value="3"/>1.85€</td><td>Danemark</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Danemark<input name="match15" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match15" type="radio" value="2"/>2.05€</td>
                                <td><input name="match15" type="radio" value="3"/>3.1</td><td>Australie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> France<input name="match16" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match16" type="radio" value="2"/>2.05€</td>
                                <td><input name="match16" type="radio" value="3"/>3.1</td><td>Perou</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Danemark<input name="match17" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match17" type="radio" value="2"/>2.05€</td>
                                <td><input name="match17" type="radio" value="3"/>3.1</td><td>France</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Australie<input name="match18" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match18" type="radio" value="2"/>2.05€</td>
                                <td><input name="match18" type="radio" value="3"/>3.1</td><td>Perou</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe C : 
                            
                            <select id="Groupe_C" name="groupeC">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="France">France</option>
                              <option value="Danemark">Danemark</option>
                              <option value="Australie">Australie</option>
                              <option value="Perou">Perou</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe C : 
                            
                            <select id="Groupe_C" name="deuxgroupeC">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="France">France</option>
                              <option value="Danemark">Danemark</option>
                              <option value="Australie">Australie</option>
                              <option value="Perou">Perou</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
         <div>
            <?php
                if(isset($_SESSION['match13']) AND isset($_SESSION['match14']) AND isset($_SESSION['match15'])  AND isset($_SESSION['match16']) AND isset($_SESSION['match17']) AND isset($_SESSION['match18']) AND isset($_SESSION['V_poule_C']) AND isset($_SESSION['D_poule_C']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule D";
                }
            ?>
        </div>        
               

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>