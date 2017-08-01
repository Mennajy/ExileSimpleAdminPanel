<?php
// Connexion à la base de données
require_once('../includes/condb.php');
// Définition titre page
$titrepage="Liste des fermes";

// Headers html; <head> + titres
include ('navbar.php');
include ('header.php');

$sql = "SELECT * FROM account ";

$resultats = mysqli_query($connection, $sql);
?>

<!--Lien du formulaire-->
<a href="fermes_new.php">Nouvelle ferme</a>

    <table class="table table-condensed table-striped table-hover">
      <thead>
        <tr>
          <th>Actions</th>
          <th>UID
		  <a href="index.php?order=id&amp;direction=ASC">+</a>
		  <a href="index.php?order=id&amp;direction=DESC">-</a>
		  </th>
          <th>CLAN id
		  <a href="index.php?order=nom&amp;direction=ASC">+</a>
		  <a href="index.php?order=nom&amp;direction=DESC">-</a>
		  </th>
          <th>Nom
		  <a href="index.php?order=surface&amp;direction=ASC">+</a>
		  <a href="index.php?order=surface&amp;direction=DESC">-</a>
		  </th>
          <th>Score
		  <a href="index.php?order=id_adresse&amp;direction=ASC">+</a>
          <a href="index.php?order=id_adresse&amp;direction=ASC">-</a>
		  </th>
		   <th>Kill
		  <a href="index.php?order=kills&amp;direction=ASC">+</a>
          <a href="index.php?order=kills&amp;direction=ASC">-</a>
		  </th>
          <th>deaths
         <a href="index.php?order=id_dirigeant&amp;direction=ASC">+</a>
             <a href="index.php?order=id_dirigeant&amp;direction=ASC">-</a>
         </th>
         <th>locker
        <a href="index.php?order=locker&amp;direction=ASC">+</a>
            <a href="index.php?order=locker&amp;direction=ASC">-</a>
        </th>
        <th>first_connect_at
       <a href="index.php?order=first_connect_at&amp;direction=ASC">+</a>
           <a href="index.php?order=first_connect_at&amp;direction=ASC">-</a>
       </th>
       <th>las_connect_at
      <a href="index.php?order=las_connect_at&amp;direction=ASC">+</a>
          <a href="index.php?order=las_connect_at&amp;direction=ASC">-</a>
      </th>
      <th>las_disconnect_at
     <a href="index.php?order=las_disconnect_at&amp;direction=ASC">+</a>
         <a href="index.php?order=las_disconnect_at&amp;direction=ASC">-</a>
     </th>
     <th>Kill
    <a href="index.php?order=id_dirigeant&amp;direction=ASC">+</a>
        <a href="index.php?order=id_dirigeant&amp;direction=ASC">-</a>
    </th>

        </tr>
      </thead>
      <tbody>

<?php
    if(mysqli_num_rows($resultats) === 0):
          echo "Il n'y a pas d'enregistrements";
        else:
          // Affichage des lignes de résultat
          while($ligne = mysqli_fetch_assoc($resultats)):
            //var_dump($ligne);
          ?>
          <tr>
            <td><span><a href="dirigeants_delete.php?id=<?= $ligne['id']?>" class="btn btn-link btn-xs">
            <span class="glyphicon glyphicon-trash"></span>
            </a>
              <a href="dirigeants_edit.php?id=<?= $ligne['id']?>" class="btn btn-link btn-xs">
            <span class="glyphicon glyphicon-pencil"></span>
              </a>
            </td>
            <td><?= $ligne['uid'] ?></td>
            <td><?= $ligne['clan_id'] ?></td>
            <td><?= $ligne['name'] ?></td>
            <td><?= $ligne['score'] ?></td>
            <td><?= $ligne['kills'] ?></td>
            <td><?= $ligne['deaths'] ?></td>
            <td><?= $ligne['locker'] ?></td>
            <td><?= $ligne['first_connect_at'] ?></td>
            <td><?= $ligne['last_connect_at'] ?></td>
            <td><?= $ligne['last_disconnect_at'] ?></td>
            <td><?= $ligne['total_connections'] ?></td>
          </tr>
          <?php
          endwhile;
        endif;
        ?>
      </tbody>
    </table>

<?php
include ("footer.php");
 ?>
