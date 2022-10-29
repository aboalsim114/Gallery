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