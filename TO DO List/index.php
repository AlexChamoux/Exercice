<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>Document</title>
</head>

<body>
    <div class="header">
        <p class="header_titre">Ma super Todo List ! </p>
    </div>
     
    <form class="taches_input" method="post" action="index.php">
        <input id="inserer" type="text" name="creer_tache"/>
        <button id="envoyer">Créer</button>
    </form>

    <table class="taches">
        <tr>
            <th>N</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>
        <?php
        $erreurs = "";
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

        if (isset($_POST['creer_tache'])) {
            if (empty($_POST['creer_tache'])) {
                $erreurs = 'Vous devez indiquer la valeur de la tâche';
            } else {
                $tache = $_POST['creer_tache'];
                $sql = "INSERT INTO tache(tache) VALUES(:tache)";
                $query = $db->prepare($sql);
                $query->bindParam(":tache", $tache, PDO::PARAM_STR);
                $query->execute();
            }
        }
        
        if (isset($_GET['supprimer_tache'])) {
            $id = $_GET['supprimer_tache'];
            $db->exec("DELETE FROM tache WHERE id=$id");
        }

        $reponse = $db->query('SELECT * FROM tache');
        $taches = $reponse->fetchAll();

        foreach ($taches as $tache) { ?>
        <tr>
            <td><?php echo $tache['id'] ?></td>
            <td><?php echo $tache['tache'] ?></td>
            <td><a class="suppr" href="index.php?supprimer_tache=<?php echo $tache['id'] ?>"> X</a></td>
        </tr>
        <?php } ?>
    </table>

    <?php if (!empty($erreurs)) { ?>
    <p><?php echo $erreurs ?></p>
    <?php } ?>
</body>
</html>
