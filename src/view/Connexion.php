<?php

include "../../header.php";

?>

  <div>
    <h2>Connexion</h2>
    <form action="../ilciExamen/src/controller/membreController.php" method="post">
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Votre email" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="mdp" placeholder="Votre password" class="form-control" required="">
      </div>
      <button class="btn btn-primary" type="submit" name="connexion">Se connecter</button>
      <button class="btn btn-secondary" type="reset">Annuler</button>
    </form>
  </div>
<?php
include "../../footer.php";
?>