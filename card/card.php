<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card artist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include ('../backend/load_bdd.php');
  $bdd = connection_mysql();
  $query = $bdd ->query("SELECT nom, profession FROM drip_drip ");
  $query->execute();
  $res = $query->fetch();
  $nom = $res['nom'];
  $profession = $res['profession'];
  while ($res = $query->fetch()) {
    # code...
  }
?>
 
  <div class="wrapper">
    <div class="outer">
      <div class="card" style="--delay:-1;">
        <div class="content">
          <div class="img"><img src="images/img-1.jpg" alt=""></div>
          <div class="details">
            <span class="name"><?php echo $res['nom'];?></span>
            <p><?php echo $res['profession'] ;?></p>
          </div>
        </div>
        <a href="../pages/profil.php">Suivre</a>
      </div>
      <div class="card" style="--delay:0;">
        <div class="content">
          <div class="img"><img src="images/img-2.jpg" alt=""></div>
          <div class="details">
            <span class="name"><?php echo "$nom";?></span>
            <p><?php echo "$profession";?></p>
          </div>
        </div>
        <a href="../pages/profil.php">Suivre</a>
      </div>
      <div class="card" style="--delay:1;">
        <div class="content">
          <div class="img"><img src="images/img-3.jpg" alt=""></div>
          <div class="details">
            <span class="name"><?php echo "$nom";?></span>
            <p>???</p>
          </div>
        </div>
        <a href="../pages/profil.php">Suivre</a>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="images/img-4.jpg" alt=""></div>
          <div class="details">
            <span class="name">???</span>
            <p>???r</p>
          </div>
        </div>
        <a href="../pages/profil.php">Suivre</a>
      </div>
      <div class="card" style="--delay:2;">
        <div class="content">
          <div class="img"><img src="images/img-5.jpg" alt=""></div>
          <div class="details">
            <span class="name">????</span>
            <p>????</p>
          </div>
        </div>
        <a href="../pages/profil.php">Suivre</a>
      </div>
    </div>
  </div>

</body>
</html>
