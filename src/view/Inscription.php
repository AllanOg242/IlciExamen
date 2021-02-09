<?php
include "../../header.php";
?>

<div>
    <h2>Inscription</h2>
    <form action="../ilciExamen/src/controller/membreController.php" method="post">
      <div class="form-group">
        <label for="">Prénom</label>
        <input type="text" name="prenom" placeholder="Votre prénom" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Votre nom" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Mail</label>
        <input type="text" name="email" placeholder="Votre mail" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="mdp" placeholder="Votre password" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Civilité</label>
        <select name="civilite" id="" class="form-control">
          <option value="m">Homme</option>
          <option value="f">Femme</option>
        </select>
      </div><div class="form-group">
        <label for="">Statut</label>
        <select name="statut" id="" class="form-control">
          <option value="admin">Admin</option>
          <option value="vendeur">Vendeur</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="inscription">S'inscrire</button>
      <button class="btn btn-secondary" type="reset">Annuler</button>
    </form>
  </div>

<?php
include "../../footer.php";
?>