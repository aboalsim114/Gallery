<?php
session_start();
require("./Config/config.php");


global $errinfo;
if(isset($_POST["submit"])){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    /* verifi si les champs du form sont vide ou pas  */

    if( empty($username) or empty($password) ){
        $msgerror = "veuillez saisir tout vos champs";
        exit(0);
    }


    $sql = "SELECT * FROM user WHERE  username='$username' and password='".hash('md5', $password)."'";

    $result = mysqli_query($conn,$sql);
     
    if(mysqli_num_rows($result) == 1){
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user_id'] = $row["user_id"];
           $_SESSION["username"] = $row["username"];
           
        }
        if($_SESSION["role"] == "admin"){
            header("location:./Admin/Admin.php");
            
        }
        else{
            header("Location:index2.php");
        }
        
        
    }else{
        echo("<script type='text/javascript'>alert('email ou mot de passe invalide ')</script>");
    }


}








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require("./Composants/Nav.php"); ?>

    <header></header>

    <div class="connexion">
        <form  method="post">
        <h1><i class="fa-solid fa-arrow-right-to-bracket"></i>  Connexion</h1>
        <input type="text" name="username" id="username" placeholder=" username">
        <input type="password" name="password" id="password" placeholder="********">
        <input type="submit" name="submit" value="connexion">
    </form>
    </div>


</body>
</html>