<?php
require "config/connexion.php";
require "models/user.model.php";
require "views/inscription.php";
require "utils/securite.php";



/*-----------------------
            Test
------------------------*/


if(!empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['mail']) && !empty($_POST['password'])){
    if(($_POST['name']!="") && ($_POST['first_name']!="") && ($_POST['mail'] !="") && ($_POST['password']!="")){
        $nameS = securite($_POST['name']);
        $first_nameS = securite($_POST['first_name']);
        $mailS = securite($_POST['mail']);
        $passwordS = securite($_POST['password']);

        $user = new User();
        $user->setName($nameS);
        $user->setFirstName($first_nameS);
        $user->setMail($mailS);
        $user->setPassword($passwordS);
        $user->createUtilisateur($bdd);

        

        header('Location:/views/user_created.php');

    }else{
        echo "Veuillez remplir même les champs vides!"; 
    }
    header('Location:views/user_created.php');
}else{
    echo '<script>alert("Veuillez remplir tous les champs")</script>';
};


$new = new User();
$new = getUser();
$req = $new;
while ($donnees = $req->fetch()){
    echo "$_SESSION"
}
