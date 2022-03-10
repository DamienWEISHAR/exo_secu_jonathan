<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inscription.css">
    <title>Document</title>
</head>

<body>
    <h1>QUI A LE PULL DE NOEL LE PLUS MOCHE?</h1>

    <h2>Tu penses être à la hauteur? <br>
    Et tout défoncer? <img src="https://c.tenor.com/sFhNgLsSO2IAAAAM/goku-dragonball.gif"><br>
    Pour le savoir, inscrivez-vous et tentez de remporter notre gros lot: des grelots!</h2>

    <form action="user.controler.php" method="POST" enctype="multipart/data">
            <label for="name">Nom</label>
            <br><input type="text" name="name" >
        
            <br><label for="first_name">Prénom</label>
            <br><input type="text" name="first_name">
     
            <br><label for="mail">Mail</label>
            <br><input type="mail" name="mail">
       
            <br><label for="password">Mot de passe</label>
            <br><input type="password" name="password">
      
            <br><label for="image">Image</label>
            <br><input type="file" name="image">
      
            <br><button type="submit">S'inscrire</button>


    </form>
</body>

</html>