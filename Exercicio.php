<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $voto = $_GET['Votacao'];
    
    
    echo "Sr(a) ".$_GET['nome'];
    echo "<br><br>";

    if (!isset($_COOKIE['Votacao'])) {
        
        setcookie("Votacao", $voto,time()+3600*24*31);
 
        $msg = "Obrigado Por Votar!";

    }
    else{

        $msg = "Você Já Votou Uma Vez.";

    }
    echo $msg;

    ?>

</body>
</html>