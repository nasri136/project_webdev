
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
                Finale : 
                <table>
                                <tr>
                                    <td></td>
                                    <td><h1>Win 1</h1></td>
                                    <td><h1>Nul</h1></td>
                                    <td><h1>Win 2</h1></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['demi1'];?> <input name="finale1" type="radio" value="<?php echo $_SESSION['demi1'];?>"/>1.6€</td>
                                    <td>NUL<input name="finale1" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="finale2" type="radio" value="<?php echo $_SESSION['demi2']?>"/>2.85€</td><td><?php echo $_SESSION['demi2']?></td>
 
                                </tr>
                                
                                 
                </table>
                Petite Finale : 
                <table>
                               
                                <tr>

                                    <td> <?php echo $_SESSION['demi3'];?> <input name="finale2" type="radio" value="<?php echo $_SESSION['demi3'];?>"/>1.6€</td>
                                    <td>NUL<input name="finale2" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="finale2" type="radio" value="<?php echo $_SESSION['demi4']?>"/>2.85€</td><td><?php echo $_SESSION['demi4']?></td>
 
                                </tr>
                                
                                 
                </table>
            
                <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>           
            </div>
        </form>
    </body>
</html>