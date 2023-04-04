<?php
function chargerClasse($classe){
    require $classe . '.class.php';
}

spl_autoload_register('chargerClasse');

$dbh = new Database();

$taskManager = new TaskManager($dbh);

if (isset($_POST['creer_tache'])) {
    $taskManager->addTask($_POST['creer_tache']);
}

if (isset($_GET['supprimer_tache'])) {
    $taskManager->delTask($_GET['supprimer_tache']);
}

$tasks = $taskManager->getAllTasks();
?>

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

       <?php foreach ($tasks as $task) { error_log(print_r($task, 1)); ?>
        <tr>
            <td><?php echo $task->id; ?></td>
            <td><?php echo $task->tache; ?></td>
            <td><a class="suppr" href="index.php?supprimer_tache=<?php echo $task->id ?>"> X</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>