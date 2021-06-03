<?php

include "header.php";

?>

<main>
  <!-- ======== Heading de page ========== -->
  <h1 class="b">Librairie Américaine <br class="ral">& <br class="ral"> Papeterie</h1>
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
  <div id="histoire"></div>
  <section>
    <h2 class="b">Histoire</h2>
    <hr class="hr-b">

    <div class="histoires">
      <img src="public/img/histoire.JPG" alt="Photo ancien Brentano's">
      <p><span class="bigLetter">L</span>a librairie Brentano's a été fondée aux États-Unis et s'est installée à Paris en 1895. Après 2010, le magasin s'est transformé car en plus de la librairie américaine d'origine, nous avons développé
        un département carterie, papeterie et décoration.
      </p>
    </div>
  </section>


  <!-- ========= à propos de nous =========== -->
  <div id="aproposdenous"></div>
  <section class="sec-b" style="background-image: url(public/img/apropos.JPG); background-size: cover; background-position: bottom;">
    <div class="apropos">
      <h2 class="v">à propos de nous</h2>
      <hr class="hr-v">

      <p class="v text-center"> Brentano’s est la librairie américaine qui se situe dans l'Avenue de l'Opéra à Paris. <br>
        Nous proposons également des articles de papeterie ainsi que des objets de décoration.</p>

    </div>

  </section>

  <!-- ============ Nos produits ============== -->

  <!-- Librairie -->
  <div id="nosproduits"></div>
  <section class="sec-v">
    <h2 class="b">Nos produits</h2>
    <hr class="hr-b">
    <h3 class="v">Section librairie Américaine</h3>

    <div class="produits">
      <div class="prodList">

        <ul>
          <li>Beaux-arts</li>
          <li>Cuisine</li>
          <li>Bande dessinée</li>
          <li>Jeunesse</li>
          <li>Littérature</li>
          <li>Parascolaire</li>
          <li>Science Humaine</li>
          <li>Voyage</li>
        </ul>
      </div>

      <img src="public/img/produits_livres.JPG" alt="Photo rayon librairie">

    </div>

    <a class="voirPlus" href="librairie.php">Voir plus</a>

    <div id="papeterie"></div>
  </section>


  <!-- Pape & deco -->
  
  <section class="sec-b">
    <h3 class="v shadowB">Section papeterie <br class="ral"> & <br class="ral"> décoration</h3>

    <div class="secPape">

      <a id="carte" href="carterie.php" class="rayonPape">
        <h4 class="v">Carterie</h4>
        <div class="rayon" style="background-image:url(public/img/carterie.JPG)">
          <p class="voirPape dispNone">Voir plus</p>
        </div>
      </a>

      <a id="papete" href="papeterie.php" class="rayonPape">
        <h4 class="v">Papeterie</h4>
        <div class="rayon" style="background-image:url(public/img/papeterie.JPG)">
          <p class="voirPape dispNone">Voir plus</p>
        </div>
      </a>

      <a id="deco" href="decoration.php" class="rayonPape">
        <h4 class="v">Décoration</h4>
        <div class="rayon" style="background-image:url(public/img/deco.JPG)">
          <p class="voirPape dispNone">Voir plus</p>
        </div>
      </a>
    </div>



  </section>

  <!-- ============== Boutique ============== -->
  <div id="boutique"></div>
  <section class="v">
    <h2 class="b">Boutique</h2>
    <hr class="hr-b">

    <div class="boutiques">

      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.480341115105!2d2.3309787511008544!3d48.86811897918673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e306bd23e2f%3A0xbb767676f8cc71b9!2s37%20Avenue%20de%20l&#39;Op%C3%A9ra%2C%2075002%20Paris!5e0!3m2!1sfr!2sfr!4v1622555067045!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="boutiqueInfo b">

        <div class="adresse">
          <h5>Adresse</h5>
          <p style="font-size:20px;">Brentano's</p>
          <p>37, Avenue de l'Opéra
            75002 Paris </p>
          <p><i class="fas fa-subway"></i> Métro: Opéra, Pyramides, Quatre Septembre</p>
        </div>

        <div class="contact">
          <h5>Contact</h5>
          <p><i class="fas fa-phone"></i> 01 42 60 87 37</p>
          <p><a class="b mail" href="mailto:paris.brentanos@gmail.com"><i class="far fa-envelope"></i> paris.brentanos@gmail.com</a></p>
        </div>

      </div>
    </div>

    <div class="sns">
      <div class="snsBack">
        <div class="snsTable">
          <h3>Nos SNS</h3>
          <ul>
            <li>Photos de nouveautés</li>
            <li>Post régulièrement</li>
            <li>Nos horaires mis à jour etc.</li>
          </ul>

          <div class="snsLien">
            <a href="https://www.facebook.com/brentanosparis/" target="_blank" style="background-color:#1977F2;"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a class="insta" href="https://www.instagram.com/paris.brentanos/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
      </div>
    </div>

  </section>




</main>


<?php
include "footer.php";

?>