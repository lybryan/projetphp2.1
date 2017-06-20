<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Rejoindre une équipe</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">


</head>

<header>
</header>
<style>
  body,
  h1 {
    font-family: "Raleway", sans-serif
  }
  
  body,
  html {
    height: 100%
  }
  
  .bgimg {
    background-image: url('/sport/assets/images/equipe.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
  }
</style>

<body>
  <div class="bgimg w3-display-container w3-animate-opacity w3-text-grey">

    <div class="w3-display-topleft w3-padding-large w3-xlarge">
      Rejoindre une équipe
    </div>
    <div class="w3-display-middle">
      <div class="w3-large w3-center">

        <form action="" method="post">
          <p>
            Nom de l'équipe
          </p>
          <select name="name">
           <?php
           foreach($liste as $user) {
            echo '<option value="'.$user['name'].'">'.$user['name'].'</option>';
        }

        ?>
    </select>


          <div>
            <p>
              Mot de passe de l'équipe
            </p>
            <input type="password" id="mp" name="psw" placeholder="Mot de passe" />
          </div>

          <div class="button">
            <button type="submit" value="envoyer" name="rejoindre_equipe">Rejoindre</button>
          </div>


        </form>
      </div>
    </div>
  </div>
</body>

</html>