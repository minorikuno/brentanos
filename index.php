<?php

include "header.php";

?>

<main>
  <!-- ======== Heading de page ========== -->
  <h1 class="b">Livrairie Américaine <br class="ral">& <br class="ral"> Papeterie</h1>
  <p class="b f-t text-center">36 Avenue de l'Opéra
    <br>75002 PARIS
  </p>

  <!-- ========= Carousel ========= -->
  <div class="container-fluide h-50">
    <div id="carouselTop" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/img/slidertop_2.JPG" class="d-block w-100 objFit" alt="Photo de boutique déco">
        </div>
        <div class="carousel-item">
          <img src="public/img/slidertop_3.JPG" class="d-block w-100 objFit" alt="Photo de boutique librairie">
        </div>
        <div class="carousel-item">
          <img src="public/img/slidertop_4.JPG" class="d-block w-100 objFit" alt="Photo de boutique">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselTop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselTop" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- ============ Histoire =========== -->
  <section>
    <h2 class="b">Histoire</h2>
    <hr class="hr-b">

    <div class="histoire">
      <img src="public/img/histoire.JPG" alt="Photo ancien Brenotano's">
      <p><span class="bigLetter">L</span>a librairie Brentano's a été fondée aux États-Unis et s'est installée à Paris en 1895. Après 2010, le magasin s'est transformé car en plus de la librairie américaine d'origine, nous avons développé 
un département carterie, papeterie et décoration.
</p>
    </div>
  </section>


  <!-- ========= à propos de nous =========== -->
  <section class="sec-b">
    <h2 class="v">à propos de nous</h2>
    <hr class="hr-v">
    <div class="apropo">
    <p class="v text-center"> Brentano’s est la librairie américaine se situe dans l'Avenue de l'Opéra à Paris. <br>
Nous proposons également des articles de papeterie ansi que des objets de décoration.</p>
<img src="public/img/apropos.JPG" alt="Photo de magasin">
    </div>
   
  </section>





</main>


<?php
include "footer.php";

?>