<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/style.css" rel="stylesheet" />
</head>
<body>
    <h1>RECHERCHE DANS LE CHAT</h1>
    <h2>Vous êtes connecté en tant que "<?php echo $_SESSION['name']; ?>"</h2>

    <form method="POST">
        <input type="text" name="keyword" placeholder="Entrez un mot-clé" required>
        <button type="submit">Envoyer</button>
    </form>

    <a href="/Projet_Oryx/chatmvc/chat/chatIndex/1">Retour</a>

    <?php if ($searchResults): ?>
        <h3>Résultats de la recherche :</h3>
        <ul>
            <?php foreach ($searchResults as $result): ?>
                <li>
                    Auteur : <?php echo $result['user_name']; ?><br>
                    Salon : <?php echo $result['room_name']; ?><br>
                    Date : <?php echo $result['msg_date']; ?><br>
                    Message : <?php echo $result['msg_text']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>