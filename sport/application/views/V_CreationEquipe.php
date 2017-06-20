<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Création d'une équipe</title>
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
      Création de l'équipe
    </div>



    <div class="w3-display-middle">

      <form method="post" action="">

        <div class="w3-large w3-center">

          <br><br><br><br><br><br><br><br>
          <p>Nom de l'équipe</p><input type="text" id="nom" name="name" placeholder="Nom de l'équipe" />

          <p>Ville de l'équipe</p><input type="text" id="nom" name="city" placeholder="Ville de l'équipe" />

          <p>Mot de passe de l'équipe</p><input type="password" id="mp" name="psw_inscription" placeholder="Mot de passe" />

          <p>Sports</p><input type="text" id="nom" name="sports" placeholder="Sports" />

          <p>Description</p><input type="text" id="nom" name="description" placeholder="Description" />

          <p>Mixité de l'équipe</p><input type="text" id="nom" name="mixite" placeholder="Mixité de l'équipe" />

          <p>Logo de l'équipe</p><input type="text" id="nom" name="logo" placeholder="Logo" />

          <p>Photo de l'équipe</p><input type="text" id="nom" name="photo" placeholder="Photo" />

        </div>

        <br>
        <div class="button">

          <button type="submit" value="envoyer" name="creation_team">Créer l'équipe</button>
        </div>
      </form>


      <div class="button">
        <button type="reset">Annuler</button>
      </div>

    </div>



</body>

</html>