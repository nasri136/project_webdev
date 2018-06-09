
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
                Quart de finale : 
                <table>
                                <tr>
                                    <td></td>
                                    <td><h1>Win 1</h1></td>
                                    <td><h1>Nul</h1></td>
                                    <td><h1>Win 2</h1></td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['8eme1'];?> <input name="quart1" type="radio" value="<?php echo $_SESSION['8eme1'];?> "/>1.6€</td>
                                    <td>NUL<input name="quart1" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="quart1" type="radio" value="<?php echo $_SESSION['8eme2']?>"/>2.85€</td><td><?php echo $_SESSION['8eme2']?></td>
 
                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['8eme3'];?> <input name="quart2" type="radio" value="<?php echo $_SESSION['8eme3'];?>"/>1.6€</td>
                                    <td>NUL<input name="quart2" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="quart2" type="radio" value="<?php echo $_SESSION['8eme4']?>"/>2.85€</td><td><?php echo $_SESSION['8eme4']?></td>

                                </tr>
                                <tr>

                                    <td> <?php echo $_SESSION['8eme5'];?> <input name="quart3" type="radio" value="<?php echo $_SESSION['8eme5'];?>"/>1.6€</td>
                                    <td>NUL<input name="quart3" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="quart3" type="radio" value="<?php echo $_SESSION['8eme6']?>"/>2.85€</td><td><?php echo $_SESSION['8eme6']?></td>

                                </tr>
                                 <tr>

                                    <td> <?php echo $_SESSION['8eme7'];?> <input name="quart4" type="radio" value=" <?php echo $_SESSION['8eme7'];?>"/>1.6€</td>
                                    <td>NUL<input name="quart4" type="radio" value="2.05"/>2.05€</td>
                                    <td><input name="quart4" type="radio" value="<?php echo $_SESSION['8eme8']?>"/>2.85€</td><td><?php echo $_SESSION['8eme8']?></td>

                                </tr>
                                 
                </table>
            
                <div id="Jouer"><input type="submit" name="Valider" value="Valider" /> </div>           
            </div>
        </form>
    </body>
</html>
