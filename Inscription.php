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
    <form  method="post">
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