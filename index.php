<?php

include "header.php";

?>

<main>

  <h1 class="b">Livrairie Américaine <br class="ral">& <br class="ral"> Papeterie</h1>
  <p class="b f-t text-center">36 Avenue de l'Opéra
    <br>75002 PARIS
  </p>

  <div class="container-fluide h-50">
    <div id="carouselTop" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/img/slider_top_1.JPG" class="d-block w-100 objFit" alt="Photo de boutique déco">
        </div>
        <div class="carousel-item">
          <img src="public/img/slider_top_2.JPG" class="d-block w-100 objFit" alt="Photo de boutique librairie">
        </div>
        <div class="carousel-item">
          <img src="public/img/slider_top_5.JPG" class="d-block w-100 objFit" alt="Photo de boutique">
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

  







</main>


<?php
include "footer.php";

?>