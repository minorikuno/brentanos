<?php
include "header.php";

if(isset($_POST["submit"])){
  $nomprenom = $_POST['nomprenom'];
  $email = $_POST['email'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];

  $mailTo = "contact@brentanos-paris.com";
  $headers = "FROM: ". $sujet;
  $txt = "Mail de formulaire de site: ".$nomprenom." de " .$sujet."\n\n"."$message";



  mail($mailTo, $sujet, $txt, $headers);
  //header("Location: index.php?mailsend");


}

?>
<main class="mainForm">
  <div class="formulaire">

    <form action="success-contact.php" method="post">
      <h1 class="v">Contactez-nous</h1>

      <div class="message">

        <input class="form-control" type="text" name="nomprenom" placeholder="Prénom et Nom">
        <input class="form-control" type="email" name="email" placeholder="Votre email">


        <input class="form-control" type="text" name="sujet" placeholder="Sujet">

        <textarea class="form-control" name="message" id="" placeholder="Votre message"></textarea>

        <button type="submit" name="submit" class="voirPlus">Envoyer</button>

      </div>




    </form>

  </div>
</main>



<?php
include "footer.php";
?>