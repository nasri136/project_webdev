
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
        <h1> Recapitulatif </h1>
        <div>
            Gagnant de la coupe du monde : <?php echo $_SESSION['vainqueur']; ?> <br />
            Finaliste de la coupe du monde : <?php echo $_SESSION['second']; ?> <br />
            Troisieme de la coupe du monde : <?php echo $_SESSION['3eme']; ?> <br />
            Quatrieme de la coupe du monde : <?php echo $_SESSION['quatrieme']; ?>
        </div>
    </body>
</html>