<?php

require "../config/connexion.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <title>Document</title>
</head>
<body>
    <h1>BRAVO <?php echo $_SESSION['name']?> !!</h1>
    <p>Tu es sur la liste des concurrents!</p>

    <img src="https://lepullmoche.shop/wp-content/uploads/2018/10/prince-bel-air-pull-moche.gif" alt="">
</body>
</html>