<?php
include "header.php";
require 'src/functions.php';

# Data de formulaire
$nomprenom = isset($_POST['nomprenom']) ? $_POST['nomprenom']:NULL ;
$email =  isset($_POST['email']) ? $_POST['email']:NULL ;
$sujet =  isset($_POST['sujet']) ? $_POST['sujet']:NULL ;
$message =  isset($_POST['message']) ? $_POST['message']:NULL ;

if(isset($_POST["submit"])){ 
  
  # Vérifie si les données contiennent pas les mauvaises valeurs
  $_POST = checkInput($_POST);

  # Filtering les valeurs
  if(isset($_POST['nomprenom'])) {
    $nomprenom = filter_var($_POST['nomprenom'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['email'])) {
    # pas de retour a la ligne
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  if(isset($_POST['sujet'])) {
    $sujet = filter_var($_POST['sujet'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['message'])) {
    $message = filter_var(($_POST['message']), FILTER_SANITIZE_STRING);
  }

  # Envoyer le mail
  # h($var) : escaping
  $mailTo = "contact@brentanos-paris.com";
  $headers = "FROM: ". h($sujet);
  $txt = "Mail de formulaire de site: ".h($nomprenom)." de " .h($sujet)."\n\n"."h($message)";

  mail($mailTo, $sujet, $txt, $headers);  
}

?>
<main class="mainForm">
  <div class="formulaire">

    <form action="success-contact.php" method="post">
      <h1 class="v">Contactez-nous</h1>

      <div class="message">

        <input class="form-control" type="text" name="nomprenom" placeholder="Prénom et Nom" required>
        <input class="form-control" type="email" name="email" placeholder="Votre email" required>


        <input class="form-control" type="text" name="sujet" placeholder="Sujet" required>

        <textarea class="form-control" name="message" id="" placeholder="Votre message" required></textarea>

        <button type="submit" name="submit" class="voirPlus">Envoyer</button>

      </div>




    </form>

  </div>
</main>



<?php
include "footer.php";
?>