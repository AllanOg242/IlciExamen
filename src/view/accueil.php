<?php
include "../../header.php";
require_once '../model/articleModel.php';
$articles = getAllArticle();
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
?>



<div class="text-center"><h1>Nos articles</h1></div>

<div class="content" id="ajax-content">
    <table class="table table-striped table-responsive-md btn-table">

    <thead>
    <tr>
        <th>Id</th>
        <th>Id membre</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Date_enreg</th>
        <th>ACTIONS</th>
    </tr>
    </thead>

    <tbody>
      <?php
        $i = 0;
          foreach ($articles as $key => $a) { 
          $i++;
        ?>
    <tr>
        <td scope="row"><?= $i ?></td>
        <td><?= $a['idMembre'] ?></td>
        <td><?= $a['nom'] ?></td>
        <td><?= $a['description'] ?></td>
        <td><?= $a['dateEnregistrement'] ?></td>
        <td>
        <a href="../ilciExamen/src/controller/articleController.php?delete=<?= $a['id'] ?>"><button class="btn btn-danger" idM="<?= $a['id'] ?>" >Supprimer</button>
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


