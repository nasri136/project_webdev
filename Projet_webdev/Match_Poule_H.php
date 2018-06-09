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
                    <h1> GROUPE H</h1>
                        <table>
                            <tr>
                                <td></td>
                                <td><h1>Win 1</h1></td>
                                <td><h1>Nul</h1></td>
                                <td><h1>Win 2</h1></td>
                                <td></td>
                            </tr>
                            <tr>
                               
                                <td> Colombie <input name="match43" type="radio" value="1"/>1.6€</td>
                                <td>NUL<input name="match43" type="radio" value="2"/>2.05€</td>
                                <td><input name="match43" type="radio" value="3"/>2.85€</td><td>Japon</td>
                                
                            </tr>
                            
                             <tr>
                               
                                <td> Pologne<input name="match44" type="radio" value="1"/>1.2€</td>
                                <td>NUL<input name="match44" type="radio" value="2"/>2.05€</td>
                                <td><input name="match44" type="radio" value="3"/>1.85€</td><td>Senegal</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Japon<input name="match45" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match45" type="radio" value="2"/>2.05€</td>
                                <td><input name="match45" type="radio" value="3"/>3.1</td><td>Senegal</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Pologne<input name="match46" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match46" type="radio" value="2"/>2.05€</td>
                                <td><input name="match46" type="radio" value="3"/>3.1</td><td>Colombie</td>
                                
                            </tr>
                            <tr>
                               
                                <td>Japon<input name="match47" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match47" type="radio" value="2"/>2.05€</td>
                                <td><input name="match47" type="radio" value="3"/>3.1</td><td>Pologne</td>
                                
                            </tr>
                            <tr>
                               
                                <td> Senegal<input name="match48" type="radio" value="1"/>1.5€</td>
                                <td>NUL<input name="match48" type="radio" value="2"/>2.05€</td>
                                <td><input name="match49" type="radio" value="3"/>3.1</td><td>Colombie</td>
                                
                            </tr>
                        </table>
                         <div>
                            Gagnant groupe H : 
                            
                            <select id="Groupe_H" name="groupeH">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Japon">Japon</option>
                              <option value="Pologne">Pologne</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Colombie">Colombie</option>
                            </select>
                            
                        </div>
                        <div>
                            Second groupe H : 
                            
                            <select id="Groupe_H" name="deuxgroupeH">
                              <option value="" disabled selected>Choose the team</option>
                              <option value="Japon">Japon</option>
                              <option value="Pologne">Pologne</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Colombie">Colombie</option>
                            </select>
                            
                        </div>
                    <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>
                </div>
            </div>
        </form>
  
       <div>
            <?php
                if(isset($_SESSION['match43']) AND isset($_SESSION['match44']) AND isset($_SESSION['match45'])  AND isset($_SESSION['match46']) AND isset($_SESSION['match47']) AND isset($_SESSION['match48']) AND isset($_SESSION['V_poule_H']) AND isset($_SESSION['D_poule_H']))
                {
                    echo "Pronostiques Enregistré pour toutes les poules. ";
                }
            ?>
        </div>           
               

          



                
                
        <script src="javascript.js"></script>  
    </body>
</html>
