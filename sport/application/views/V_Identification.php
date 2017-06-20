<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Page d'identification</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
    background-image: url('/sport/assets/images/iden.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
  }
</style>

<body>

  <div class="bgimg w3-display-container w3-animate-opacity w3-text-grey">

    <h1 class="w3-display-topleft w3-padding-large w3-xlarge">Bienvenue sur l'application <br> de suivi du club ! <br><br></h1>

    <div class="w3-display-middle">

      <section class="w3-large w3-center">


        <article class="formulaire">


          <form method="post" action="">
            <div>
              <p>
                Veuillez vous connecter :
              </p>
              <p>
                Email
              </p>
              <label for="nom"></label>
              <input type="email" id="nom" name="mail" placeholder="Email" />
            </div>

            <div>
              <p>
                Mot de passe
              </p>
              <label for="Mot de Passe"></label>
              <input type="password" id="mp" name="password" placeholder="Mot de passe" />
            </div>
            <br>
            <div class="button">
              <button type="submit" value="envoyer" name="connexion">Se connecter</button>
            </div>
            <br>
          </form>
          <div class="button">
            <a href=<?php echo base_url(). "index.php/C_Inscription/"?>> Créer un compte</a>
          </div>
          <br>
          <div class="button">
            <button type="reset">Annuler</button>
          </div>


        </article>
      </section>
    </div>
  </div>
</body>

</html>