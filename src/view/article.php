<?php
include "../../header.php";
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
?>

<div>
    <h2>Nos articles</h2>
    <form action="../ilciExamen/src/controller/articleController.php" method="post">
      
      <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Nom" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" placeholder="Description" class="form-control" required="">
      </div>
      <button class="btn btn-primary" type="submit" name="valider">Valider</button>
      <button class="btn btn-secondary" type="reset">Annuler</button>
    </form>
  </div>


<?php
include "../../footer.php";
?>