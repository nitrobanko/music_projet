<?php
session_start();

  if (isset($_SESSION['email']))
  {
    echo "connecté en tant que : " . $_SESSION['email'];
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <section>
      <header>
        <a href="#" class="logo">Internet Money</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
          <li><a href="#" style="--i: 1">Home</a></li>
          <li><a href="../pages/profil.php" style="--i: 2">Profil</a></li>
          <li><a href="../chat/chatconnect.php" style="--i: 3">Chat</a></li>
          <li><a href="../pages/deconnexion.php" style="--i: 4">Déconnexion</a></li>
        </ul>
      </header>
      <div class="container">
        <div class="box" style="--i: 3">
          <div class="imgBx" >
           <a href="../card/card.php"><img src="beat.jpg"  /></a>
           
          </div>
        </div>
        <div class="box" style="--i: 4">
          <div class="imgBx">
           <a href="../card/card.php"> <img src="guit.jpg" />
          </div>
        </div>
        <div class="box" style="--i: 5">
          <div class="imgBx">
            <a href="../card/card.php"><img src="vid.webp" />
          </div>
        </div>
        <div class="box" style="--i: 6">
          <div class="imgBx">
            <a href="../card/card.php"><img src="rap.jpg" />
          </div>
        </div>
      </div>
      <div class="footer">
        <ul class="sci">
          <li><a href="#" style="--i: 9">Facebook</a></li>
          <li><a href="#" style="--i: 8">Twitter</a></li>
          <li><a href="#" style="--i: 7">Instagram</a></li>
        </ul>
        <p class="copyrightText">©Internet Money. 2021</p>
      </div>
    </section>
    <script>
      let imgBx = document.querySelectorAll(".imgBx");
      imgBx.forEach((popup) =>
        popup.addEventListener("click", () => {
          popup.classList.toggle("active");
        }),
      );

      function toggleMenu() {
        const menuToggle = document.querySelector(".toggle");
        const navigation = document.querySelector(".navigation");
        menuToggle.classList.toggle("active");
        navigation.classList.toggle("active");
      }
    </script>
  </body>
</html>
