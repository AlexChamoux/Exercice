<?php

session_start();

include('includes/config.php');

$sql = "SELECT * FROM inscription";
$result = $dbh->query($sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="adminlogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
</head>
<body>
    <header class="title-2">
        <h1>Page Administrateur</h1>
    </header>
    <div class="title-list">
      <h2>Liste des inscrits au Chamiponnat :</h2>
    </div>
    <table>
  <tr>
    <th class="nom">Nom</th>
    <th class="prenom">Prénom</th>
    <th class="age">Âge</th>
    <th class="mail">Email</th>
    <th class="dist">Catégorie Distance</th>
    <th class="temps">Catégorie Temps</th>
    <th class="volt">Catégorie Voltige</th>
  </tr>
  <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
    error_log(print_r($row, 1));
    ?>
    <tr>
      <td><?php echo $row["Nom"]; ?></td>
      <td><?php echo $row["Prenom"]; ?></td>
      <td><?php echo $row["Age"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["CatDistance"]; ?></td>
      <td><?php echo $row["CatTemps"]; ?></td>
      <td><?php echo $row["CatVoltige"]; ?></td>
    </tr>
  <?php } ?>
</table>
    
</body>
</html>