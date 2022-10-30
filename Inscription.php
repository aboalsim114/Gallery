<?php

require("./Config/config.php");

if(isset($_POST["submit"]))
{
    $username = htmlspecialchars($_POST["username"]);
    $email    = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars(md5($_POST["password"]));
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./images/" . $filename;

    if(empty($username) or empty($email) or empty($password) or empty($filename))
    {
        echo "veuillez remplir tout vos champs";
        exit(0);
    }


    $sql_e = "SELECT * FROM user WHERE username='$username'";
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_e) > 0) {
    echo("<script type='text/javascript'>alert('ce Mail est deja pris')</script>");

}

if (strlen($_POST["password"]) <= '10') {
    echo("<script type='text/javascript'>alert('Votre mot de passe doit faire plus de 10 caractères ')</script>");
}


else{

    /* req */        
    $sql = "INSERT INTO user (username,email,password,image) VALUES ('$username', '$email','$password','$filename') ";
    
/* si tout les champs sont rempli alors  */
if(mysqli_query($conn , $sql)){
    $msgsuccess = "ton compte a bien été cree";
    $success = TRUE;
    
    
}



else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
}






}
move_uploaded_file($tempname, $folder);
header("location:Connexion.php");



}







?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cree Un Compte</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require("./Composants/Nav.php"); ?>

    <header></header>

    <div class="inscription">
    <form  method="post" enctype="multipart/form-data">
        <h1><i class="fa-solid fa-user-plus"></i> Cree mon Compte</h1>
        <input type="text" name="username" id="username" placeholder=" username">
        <input type="email" name="email" id="email" placeholder="email" >
        <input type="password" name="password" id="password" placeholder="********">
        <input type="file" name="image" id="image" class="inputfile" >
        <input class="register_btn" type="submit" name="submit" value="Cree mon Compte">
    </form>
    </div>


</body>
</html>