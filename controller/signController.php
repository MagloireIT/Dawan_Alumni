<?php

$link= mysqli_connect(
    'localhost',
    'root',
    '',
    'dalumni',
);

if (
    empty($_POST['nom']) || empty($_POST['prenom'])
    || empty($_POST['email']) || empty($_POST['mdp'])
){
    echo "Remplir tout les champs du formulaire";
    header("location: ../index.php ");
    exit();
}else{
    
    $sql='INSERT INTO user (nom, prenom, email, mdp) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['email'].'","'.$_POST['mdp'].'")';

        mysqli_query($link, $sql);
        header("location:../view/accueil.php");
 
        exit();

}
 
?>