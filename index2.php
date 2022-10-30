<?php
session_start();
require("./Config/config.php");

if(!isset($_SESSION["user_id"])){
  header("Location: index.php");
  
  exit(0); 
}




$id = $_SESSION["user_id"];

$sql = "SELECT * FROM annonce";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();






?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Account</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <!--
      Need a visual blank slate?
      Remove all code in `styles.css`!
    -->
    <link rel="stylesheet" href="styles.css" />
    <script type="module" src="script.js"></script>
  </head>
  <body>
   <?php require("./Composants/Nav2.php") ?>

    <header></header>

    <div class="cardsContainer">
      <div class="cardContainerTitle">
        <h1><i class="fa-brands fa-envira"></i> Fonds d'écran</h1>
      </div>

      <div class="cards">

      <?php foreach($result as $annonce): ?>
        <div class="card">
          <a href="DetailAnnonce.php?id=<?= $annonce["image_id"] ?>"
            ><img
              src="<?=  $annonce["image"] ?>"
              alt=""
          /></a>
        </div>
        <?php endforeach ?>
        
     
      </div>
    </div>

    

    <script
      src="https://kit.fontawesome.com/36b9253a34.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
