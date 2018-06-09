
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
                Demi finale : 
                <table>
                                <tr>
                                    <td></td>
                                    <td><h1>Win 1</h1></td>
                                    <td><h1>Nul</h1></td>
                                    <td><h1>Win 2</h1></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['quart1'];?> <input name="demi1" type="radio" value="<?php echo $_SESSION['quart1'];?> "/>1.6€</td>
                                    <td>NUL<input name="demi1" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="demi1" type="radio" value="<?php echo $_SESSION['quart2']?>"/>2.85€</td><td><?php echo $_SESSION['quart2']?></td>
 
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['quart3'];?> <input name="demi2" type="radio" value="<?php echo $_SESSION['quart3'];?>"/>1.6€</td>
                                    <td>NUL<input name="demi2" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="demi2" type="radio" value="<?php echo $_SESSION['quart4']?>"/>2.85€</td><td><?php echo $_SESSION['quart4']?></td>

                                </tr>
                               
                                 
                </table>
            
                <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>           
            </div>
        </form>
    </body>
</html>
