<?php

$link= mysqli_connect(
    'localhost',
    'root',
    '',
    'dalumni',
);

$email=$_POST['emailco'];
$mdp=$_POST['mdpco'];

        $email = stripcslashes($email);  
        $mdp = stripcslashes($mdp);  
        $email = mysqli_real_escape_string($link, $email);  
        $mdp = mysqli_real_escape_string($link, $mdp);  




        $sql = "select *from user where email = '$email' and mdp = '$mdp'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:../view/accueil.php");
 
            exit();
        }  
        else{  
            header("location: ../index.php ");
            exit();
        }     
?>