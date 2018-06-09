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
                    <h1> GROUPE D</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Argentine<input name="match19" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match19" type="radio" value="2"/>2.05€</td>
                                <td><input name="match19" type="radio" value="3"/>2.85€</td><td>Islande</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Croatie<input name="match20" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match20" type="radio" value="2"/>2.05€</td>
                                <td><input name="match20" type="radio" value="3"/>1.85€</td><td>Nigeria</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Argentine<input name="match21" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match21" type="radio" value="2"/>2.05€</td>
                                <td><input name="match21" type="radio" value="3"/>3.1</td><td>Croatie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Nigeria<input name="match22" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match22" type="radio" value="2"/>2.05€</td>
                                <td><input name="match22" type="radio" value="3"/>3.1</td><td>Islande</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Islande<input name="match23" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match23" type="radio" value="2"/>2.05€</td>
                                <td><input name="match23" type="radio" value="3"/>3.1</td><td>Croatie</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Nigeria<input name="match24" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match24" type="radio" value="2"/>2.05€</td>
                                <td><input name="match24" type="radio" value="3"/>3.1</td><td>Argentine</td>
                                
                            </tr>
                        </table>
                        <div>
                            Gagnant groupe D : 
                            
                            <select id="Groupe_D" name="groupeD">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Argentine">Argentine</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Islande">Islande</option>
                              <option value="Croatie">Croatie</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe D : 
                            
                            <select id="Groupe_D" name="deuxgroupeD">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Argentine">Argentine</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Islande">Islande</option>
                              <option value="Croatie">Croatie</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
         <div>
            <?php
                if(isset($_SESSION['match19']) AND isset($_SESSION['match20']) AND isset($_SESSION['match21'])  AND isset($_SESSION['match22']) AND isset($_SESSION['match23']) AND isset($_SESSION['match24']) AND isset($_SESSION['V_poule_D']) AND isset($_SESSION['D_poule_D']))
                {
                    echo "Pronostiques Enregistré, Vous pouvez passer à la poule E";
                }
            ?>
        </div>        
               

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>