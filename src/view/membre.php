<?php
include "../../header.php";
require_once '../model/membreModel.php';
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
$membres = getAllMembres();

if(isset($_GET['erreur'])){
  echo '
    <div class="alert alert-danger" role="alert">
      Inscription echouée !!!
    </div>

  ';
}

?>

<div class="text-center"><h1>Nos membres</h1></div>
<div class="content" id="ajax-content">
    <table class="table table-striped table-responsive-md btn-table">

    <thead>
    <tr>
        <th>Id membre</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Civilité</th>
        <th>Date_enreg</th>
        <th>Statut</th>
        <th>ACTIONS</th>
    </tr>
    </thead>

    <tbody>
      <?php
        $i = 0;
          foreach ($membres as $key => $m) { 
          $i++;
        ?>
    <tr>
        <td scope="row"><?= $i ?></td>
        <td><?= $m['nom'] ?></td>
        <td><?= $m['prenom'] ?></td>
        <td><?= $m['email'] ?></td>
        <td><?= ($m['civilite'] == 'm') ? 'HOMME' : 'FEMME' ?></td>
        <td><?= $m['dateEnregistrement'] ?></td>
        <td><?= $m['statut'] ?></td>
        <td>
            <?php if ($m['id'] != $_SESSION['user']['id'] && $_SESSION['user']['statut'] == 'admin') { ?>
        <a href="../ilciExamen/src/controller/membreController.php?delete=<?= $m['id'] ?>"><button class="btn btn-danger" idM="<?= $a['id'] ?>">Supprimer</button></a>
    <?php } ?>
        </td>
    </tr>

      <?php }
    ?>
    </tbody>

    </table>
</div>

<?php
include "../../footer.php";
?>