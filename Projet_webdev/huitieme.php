
<?php
    session_start();
    //https://www.lequipe.fr/Football/FootballTableau2768.html
?>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
       
    
        
    </head>
    <body>
        <form metho="post" name="pronos"  action="validation_prono.php" >
            <div>
                8eme de finale : 
                <table>
                                <tr>
                                    <td></td>
                                    <td><h1>Win 1</h1></td>
                                    <td><h1>Nul</h1></td>
                                    <td><h1>Win 2</h1></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['V_poule_A'];?> <input name="8eme1" type="radio" value="<?php echo $_SESSION['V_poule_A'];?> "/>1.6</td>
                                    <td>NUL<input name="8eme1" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme1" type="radio" value="<?php echo $_SESSION['D_poule_B']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_B']?></td>
 
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['V_poule_C'];?> <input name="8eme2" type="radio" value="<?php echo $_SESSION['V_poule_C'];?>"/>1.6€</td>
                                    <td>NUL<input name="8eme2" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme2" type="radio" value="<?php echo $_SESSION['D_poule_D']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_D']?></td>

                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['V_poule_E'];?> <input name="8eme3" type="radio" value="<?php echo $_SESSION['V_poule_E'];?>"/>tamere</td>
                                    <td>NUL<input name="8eme3" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme3" type="radio" value="<?php echo $_SESSION['D_poule_F']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_F']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['V_poule_G'];?> <input name="8eme4" type="radio" value="<?php echo $_SESSION['V_poule_G'];?> "/>1.6€</td>
                                    <td>NUL<input name="8eme4" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme4" type="radio" value="<?php echo $_SESSION['D_poule_H']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_H']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['V_poule_B'];?> <input name="8eme5" type="radio" value="<?php echo $_SESSION['V_poule_B'];?>"/>1.6€</td>
                                    <td>NUL<input name="8eme5" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme5" type="radio" value="<?php echo $_SESSION['D_poule_A']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_A']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['V_poule_D'];?> <input name="8eme6" type="radio" value="<?php echo $_SESSION['V_poule_D'];?>"/>1.6€</td>
                                    <td>NUL<input name="8eme6" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme6" type="radio" value="<?php echo $_SESSION['D_poule_C']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_C']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['V_poule_F'];?> <input name="8eme7" type="radio" value="<?php echo $_SESSION['V_poule_F'];?>"/>1.6€</td>
                                    <td>NUL<input name="8eme7" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme7" type="radio" value="<?php echo $_SESSION['D_poule_E']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_E']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['V_poule_H'];?> <input name="8eme8" type="radio" value="<?php echo $_SESSION['V_poule_H'];?> "/>1.6€</td>
                                    <td>NUL<input name="8eme8" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="8eme8" type="radio" value="<?php echo $_SESSION['D_poule_G']?>"/>2.85€</td><td><?php echo $_SESSION['D_poule_G']?></td>

                                </tr>
                </table>
            
                <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>           
            </div>
        </form>
    </body>
</html>