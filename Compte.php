<?php
session_start();
require("./Config/config.php");


$id = $_SESSION["user_id"];

$sql = "SELECT * FROM user WHERE user_id='$id' ";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();








?>

<?php foreach($result as $user): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon Compte</title>
    <link rel="stylesheet" href="user_profile.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php  require("./Composants/Nav2.php") ?>
    <!--  -->
    <header></header>
    <div class="userprofile">
        <div class="userprofileimg">
            <img src=" ./images/<?=$user["image"] ?>" alt="" srcset="">
        </div>
        <div class="userprofilecontent">
            <div class="userprofileName">
                <h2><?= $user["username"]  ?></h2> 
                <br>
                <h2><?= $user["email"]  ?></h2>
            </div>

        <div class="userprofilecards">
            <div class="userprofilecard"></div>
            <div class="userprofilecard"></div>
            <div class="userprofilecard"></div>
            <div class="userprofilecard"></div>
        </div>

        </div>
    </div>

    


</body>
</html>
<?php endforeach ?>