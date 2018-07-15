<?php include( 'views/inc/header.php' ); ?>
<section id="accueil" role="section">
  <header>
      <h1 id="titre">Bienvenue chez les nains</h1>
  </header>
  <div class="container" id="carousel">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/nain-1.jpg" alt="Les nains">
            <div class="carousel-caption d-none d-md-block">
            <h5>Les nains</h5>
            <a href="index.php?c=nain" class="btn btn-primary">Voir la liste</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/ville1.jpg" alt="Les villes">
            <div class="carousel-caption d-none d-md-block">
            <h5>Les villes</h5>
            <a href="index.php?c=ville" class="btn btn-primary">Voir la liste</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/taverne1.jpg" alt="les tavernes">
            <div class="carousel-caption d-none d-md-block">
            <h5>Les tavernes</h5>
            <a href="index.php?c=taverne" class="btn btn-primary">Voir la liste</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/nains-2.jpg" alt="les groupes">
            <div class="carousel-caption d-none d-md-block">
            <h5>Les groupes</h5>
            <a href="index.php?c=groupe" class="btn btn-primary">Voir la liste</a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<?php include( 'views/inc/footer.php' ); ?>