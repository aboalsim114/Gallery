<?php 
session_start();
require("./Config/config.php");


$image_id = $_GET["image_id"];



$sql = "SELECT * FROM annonce WHERE image_id='$image_id'  ";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Annonce</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php
  if(isset($_SESSION["user_id"])){
      require("./Composants/Nav2.php") ;
}
else{
    require("./Composants/Nav.php") ;
}
   
   ?>
    
    <header></header>

<?php foreach($result as $annonce): ?>
    <div class="DetailAnnonce">
        <div class="DetailAnnonceImage">
            <img src="<?=  $annonce["image"] ?>" alt="" srcset="">
        </div>
        <button class="btn_download">Télécharger <i class="fa-solid fa-circle-down"></i> </button>
    </div>
<?php endforeach ?>


</body>
</html>