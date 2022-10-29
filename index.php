<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
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
   <?php require("./Composants/Nav.php") ?>

    <header></header>

    <div class="cardsContainer">
      <div class="cardContainerTitle">
        <h1><i class="fa-brands fa-envira"></i> Fonds d'écran</h1>
      </div>

      <div class="cards">

      <?php for ($i = 0 ; $i<=6 ; $i++): ?>
        <div class="card">
          <a href="#!"
            ><img
              src="https://wallpapershome.com/images/pages/ico_h/23987.jpg"
              alt=""
          /></a>
        </div>
       
        <?php endfor ?>
     
      </div>
    </div>

    

    <script
      src="https://kit.fontawesome.com/36b9253a34.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
