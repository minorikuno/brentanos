<?php

include "header.php";

?>

<main>

  <h1 class="b">Votre message est envoyé !</h1>

  <div class="mainForm">

    <div class="postdData">
      <h5>Votre nom et prénom</h5>
      <p><?= $_POST['nomprenom'] ?></p>
    </div>

    <div class="postdData">
      <h5>Votre email adress</h5>
      <p><?= $_POST['email'] ?></p>
    </div>

    <div class="postdData">
      <h5>Le sujet de message</h5>
      <p><?= $_POST['sujet'] ?></p>
    </div>

    <div class="postdData">
      <h5>Votre message</h5>
      <p><?= $_POST['message'] ?></p>
    </div>




<a class="b" href="index.php">Page d'accueil</a>




  </div>






</main>



<?php

include "footer.php";

?>