<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- custom style -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded" role="navigation" >
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mr-right">
          <li class="nav-item active">
            <a class="nav-link" href="#accueil">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#presentation">Présentation</a>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cv">CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- header -->
    <header id="accueil" class="bg" >
       <div class="container padding-150">
           <div class="row text-center">
              <div class="col-12">
                <h1 class="font-80">Blanc David</h1>
                <br>
                <br>
                <h2 class="font-60">Développeur Web</h2>
                <p class="font-20">Étudiant en développement web, en recherche de stage sur la région héraultaise.</p>
                <p class="font-20">Site en cours de construction...</p>
              </div>
           </div>
       </div>
    </header>

    <!-- présentation -->
    <section id="presentation">
     <div class="container padding-150">
        <div class="row text-center">
          <div class="col-12">
            <h2 style="color:red">Qui suis-je?</h2>
            <br>
            <p>Bonjour!</p> <br><p>Je m'appelle BLANC David.</p><br><p>
            Depuis le mois de septembre 2017 je suis une formation de développeur web dont l'objectif est de réussir ma reconversion professionnelle.</p>
            <p>Curieux et passionné par les nouvelles technologies, l'informatique était déjà un de mes loisirs préférés avant d'entamer cette formation. L'apprentissage des différents languages informatiques m'épanouie et me conforte dans le choix de ce métier.</p>
            <p>Chaque réussite dans mes travaux me donne l'envie de progresser et de parfaire mes techniques de développement afin d'améliorer ma créativité.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- réalisations -->
    <section id="portfolio" class="bg-dark text-cloud">
      <div class="container padding-150 text-center">
        <div class="row">
          <div class="col-12">
            <h2 class="font-60">Mes réalisations</h2>
            <br>
          </div>
          <div class="separator" class="col-12"></div>
          <div class="container">
            <div class="row padding-150">
              <div class="col-12 col-sm-12  col-md-12 col-lg-4 padding-10">
                <div class="card mx-auto" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="img/cards/travel.png" alt="Card image cap">
                <div class="card-body">
                  <div class="card-block">
                    <h4 class="card-title text-dark">Travel Agency</h4>
                    <p class="card-text text-dark">Intégration de page</p>
                    <a href="../travel/index.html" target="_blank" class="btn btn-primary">Voir la page</a>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 padding-10">
                <div class="card mx-auto" style="width: 20rem;">
                  <img class="card-img-top img-fluid" src="http://via.placeholder.com/350x182" alt="Card image cap">
                  <div class="card-body">
                    <div class="card-block">
                      <h4 class="card-title text-dark">Titre de la réalisation</h4>
                      <p class="card-text text-dark">Texte à insérer</p>
                      <a href="#" class="btn btn-primary">Lien de redirection</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 padding-10">
                <div class="card mx-auto" style="width: 20rem;">
                <img class="card-img-top img-fluid" src="http://via.placeholder.com/350x182" alt="Card image cap">
                <div class="card-body">
                  <div class="card-block">
                    <h4 class="card-title text-dark">Titre de la réalisation</h4>
                    <p class="card-text text-dark">Texte à insérer</p>
                    <a href="#" class="btn btn-primary">Lien de redirection</a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- carousel -->
    <section id="showcase">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/computer/nains.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Personnel minier</h5>
              <a href="../nains/index.php" class="btn btn-primary">Visiter</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/computer/flooflix.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>FLOOFLIX</h5>
              <a href="http://127.0.0.1:8000" target="_blank" class="btn btn-primary">Visiter</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/computer/computer_3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Titre de la réalisation</h5>
              <a href="#" class="btn btn-primary">Visiter</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hiddencard/="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <!-- services -->
    <section id="services" class="bg-cloud text-dark">
      <div class="container padding-150 text-center">
        <h2 class="font-60">Mes compétences</h2>
        <br>
        <div class="separator" class="col-12" ></div>
          <div class="row padding-150">
            <div class="col-12 col-md-6">
              <div class="card border-dark mb-3 .padding-50" style="max-width: 30rem;">
                <div class="card-header"><h4>FRONT-END</h4></div>
                <div class="card-body text-dark">
                  <p class="card-text">Création de site web responsive</p>
                  <p class="card-text">Intégration de newsletters</p>
                  <p class="card-text">Gestion des intéractions de l'utilisateur</p>
                </div>
                <div class="card-footer bg-transparent border-dark">
                  <img src="img/logos/logos.png" alt="logos">
                  <img src="img/logos/jquery.png" alt="jquery">
                  <img src="img/logos/bootstrap.png" alt="bootstrap">
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card border-dark mb-3 .padding-50" style="max-width: 30rem;">
                <div class="card-header"><h4>BACK-END</h4></div>
                <div class="card-body text-dark">
                  <p class="card-text">Réalisation de pages dynamiques</p>
                  <p class="card-text">Gestion de base de données</p>
                  <p class="card-text">Programmation orienté objet</p>
                </div>
                <div class="card-footer bg-transparent border-dark">
                  <img src="img/logos/php.png" alt="jquery">
                  <img src="img/logos/symfony.png" alt="symphony">
                  <img src="img/logos/js.png" alt="javascript">
                  <img src="img/logos/mysql.png" alt="mysql">
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- cv -->
    <section id="cv" class="bg-dark text-cloud">
        <div class="container padding-150 text-center">
          <div class="row">
            <div class="col-12">
              <h2 class="font-60">Curriculum Vitae</h2>
              <br>
              <div class="separator" class="col-12" ></div>
              <br>
              <p class="padding-50">Télécharger mon CV au format PDF</p>
              <a href="img/cv/BLANCDAVID.pdf" target="_blank" class="btn btn-primary">Télécharger</a>
            </div>
          </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="bg-contact text-cloud">
      <div class="container padding-150 text-center">
        <div class="row">
          <div class="col-12">
          <h2 class="font-60">Contact</h2>
          <br>
          <div class="separator" class="col-12" ></div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <ul class="list-inline padding-50">
              <li class="list-inline-item"><a class="tw" href="https://twitter.com/blancdavid34" target="_blank"></a></li>
              <li class="list-inline-item"><a class="in" href="https://www.linkedin.com/in/david-blanc-5679b113b/" target="_blank"></a></li>
              <li class="list-inline-item"><a class="git" href="https://github.com/david8766" target="_blank"></a></li>
            </ul>
          </div>
        </div>
    <!-- form -->
      <div class="row justify-content-center justify-content-md-center">
        <div class="col-8">
          <form action="send.php" class="text-left" method="post" id="form" name="frmcontacttxt">
            <div class="form-group">
              <label for="name">Nom</label>
              <span>*</span>
              <input type="text" class="form-control text" name="name" id="name" value="">
              <br>
              <label for="email">Email</label>
              <span>*</span>
              <input type="email" class="form-control text" id="email" name="email" aria-describedby="emailHelp" value="">
              <br>
              <small id="emailHelp" class="form-text text-muted"></small>
              <div class="form-group">
                <label for="message">Votre message</label>
                <span>*</span>
                <textarea class="form-control text" id="message" name="message" rows="5" value=""></textarea>
              </div>
            </div>
            <p class="text-quote" style="color:white;">(<span>*</span>) Champs requis</p>
            <button class="btn btn-primary" type="submit" data-role="submit" name="submitFrmTxt">Envoyez</button>
            <input name="1" type="hidden" value="" /><input name="2" style="display:none;" type="text" value="Ne pas remplir" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-cloud">


    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- à ajouter pour le page scroll effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
