<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Création d'un évènement</title>
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
    background-image: url('/sport/assets/images/evenement.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
  }
</style>

<body>
  <div class="bgimg w3-display-container w3-animate-opacity w3-text-grey">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
      Créer un évènement
    </div>

    <div class="w3-display-middle">
      <div class="w3-large w3-center">
        <section class="FormulaireInscription">

          <article class="formulaire">

            <form method="post" action="">
              <div>

                <br>
                <p>
                  Type d'évènement
                </p>
                <select name="type" id="nom">
                        <option value="entrainement" selected>Entraînement</option>
                        <option value="competition">Compétition</option>
                    </select>

                <br>
                <p>
                  Dates de l'évènement
                </p>
                <input type="date" id="nom" name="debut" placeholder="Début (yyyy-mm-jj)" />

                <br>
                <input type="date" id="nom" name="fin" placeholder="Fin (yyyy-mm-jj)" />

                <br>
                <p>
                  Périodicité de l'évènement

                </p>
                <select name="periodicite" id="nom">
                        <option value="non" selected>Aucune</option>
                        <option value="jour">Jour</option>
                        <option value="semaine">Semaine</option>
                        <option value="mois">Mois</option>
                    </select>


                <br>
                <p>
                  Lieu de l'évènement
                </p>
                <input type="text" id="nom" name="lieu" placeholder="Lieu" />

                <br>
                <p>
                  Description de l'évènement
                </p>
                <input type="text" id="nom" name="description" placeholder="Description" />
                <p></p>

              </div>

              <div class="button">
                <button type="submit" value="envoyer" name="creation_evenement">Créer l'evenement</button>
              </div>
            </form>


            <div class="button">
              <button type="reset">Annuler</button>
            </div>


          </article>
        </section>
      </div>
    </div>
  </div>
</body>

</html>