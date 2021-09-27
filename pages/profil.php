<?php
  session_start();

include ('../backend/load_bdd.php');
  $bdd = connection_mysql();

  if (isset($_SESSION['email']))
  {
    echo "connecté en tant que : " . $_SESSION['email'];

  }
  ?>


<!DOCTYPE html>
<html lang="fr">
  ﻿<head>
﻿<meta charset="utf-8">
    ﻿<meta http-equiv="X-UA-Compatible" content="IE=edge">
﻿<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../main/style.css" />
  ﻿  <title>Mon profil</title>
</head>
<body>
  <section>
      <header>
        <a href="#" class="logo">Internet Money</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
          <li><a href="../main/page.php" style="--i: 1">Home</a></li>
          <li><a href="../pages/profil.php" style="--i: 2">Profil</a></li>
          <li><a href="#" style="--i: 3">Chat</a></li>
          <li><a href="../pages/deconnexion.php" style="--i: 4">Déconnexion</a></li>
        </ul>
      </header>

<?php


  $query = $bdd->prepare("SELECT email, nom FROM user  ");
  $query->execute();
  $res = $query->fetch();
  $email = $_SESSION['email'];
  
  
?>
<div align="center">
         <h2>Profil de <?php echo $_SESSION['email']; ?></h2>
  </div>
﻿       <script>
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
    </script>                    ﻿    
  </body>                                                                                                  
</html>