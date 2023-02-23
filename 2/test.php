<?php
if( isset($_POST["submit"])){
$Text = $_POST["nom"];
echo $Text;
};

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','test');

try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
    catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

$BigMac = "Big Mac";
$description = "Bon burger de base";

$sql = "INSERT INTO boutique (nom, description, prix) VALUES (:BigMac, :description, 5.5)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":BigMac", $BigMac, PDO::PARAM_STR);
    $query->bindParam(":description", $description, PDO::PARAM_STR);
    $query->execute();

$DoubleCheese = "Double Cheese";
$description2 = "Le classic DoubleCheese, Miam";

$sql = "INSERT INTO boutique (nom, description, prix) VALUES (:DoubleCheese, :description2, 6)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":DoubleCheese", $DoubleCheese, PDO::PARAM_STR);
    $query->bindParam(":description2", $description2, PDO::PARAM_STR);
    $query->execute();

$RoyalCheese = "Royal Cheese";
$description3 = "Le RoyalCheese est de retour";

$sql = "INSERT INTO boutique (nom, description, prix) VALUES (:RoyalCheese, :description3, 6.5)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":RoyalCheese", $RoyalCheese, PDO::PARAM_STR);
    $query->bindParam(":description3", $description3, PDO::PARAM_STR);
    $query->execute();



$BigMac = "Big Mac";
$sql = "SELECT * from boutique WHERE nom=:BigMac";
    $query = $dbh->prepare($sql);
    $query->bindParam(":BigMac", $BigMac, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
    echo $result['nom']." ".$result['description']." ".$result['prix']."<br>";


$DoubleCheese = "Double Cheese";
$sql = "SELECT * from boutique WHERE nom=:DoubleCheese";
    $query = $dbh->prepare($sql);
    $query->bindParam(":DoubleCheese", $DoubleCheese, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
    echo $result['nom']." ".$result['description']." ".$result['prix']."<br>";


$RoyalCheese = "Royal Cheese";
$sql = "SELECT * from boutique WHERE nom=:RoyalCheese";
    $query = $dbh->prepare($sql);
    $query->bindParam(":RoyalCheese", $RoyalCheese, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
    echo $result['nom']." ".$result['description']." ".$result['prix']."<br>";


$query->closeCursor();

/*********************************************/
//Mysqli

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','test');

$dbh = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($dbh->connect_error){
    die("Erreur de connexion à la base de données : " . $dbh->connect_error);
};


$BigMac = "Big Mac";
$description = "Bon burger de base";
$prix = 5.5;
$sql = "INSERT INTO boutique (nom, description, prix) VALUES (?, ?, ?)";
    $query = $dbh->prepare($sql);
    $query->bind_param("ssd", $BigMac, $description, $prix);
    $query->execute();

$DoubleCheese = "Double Cheese";
$description2 = "Le classic DoubleCheese, Miam";
$prix2 = 6;
$sql = "INSERT INTO boutique (nom, description, prix) VALUES (?, ?, ?)";
    $query = $dbh->prepare($sql);
    $query->bind_param("ssd", $DoubleCheese, $description2, $prix2);
    $query->execute();


$RoyalCheese = "Royal Cheese";
$description3 = "Le RoyalCheese est de retour";
$prix3 = 6.5;
$sql = "INSERT INTO boutique (nom, description, prix) VALUES (?, ?, ?)";
    $query = $dbh->prepare($sql);
    $query->bind_param("ssd", $RoyalCheese, $description3, $prix3);
    $query->execute();

    $sql = "SELECT * FROM boutique WHERE nom=?";
    $query = $dbh->prepare($sql);
    
    $BigMac = "Big Mac";
    $query->bind_param("s", $BigMac);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();
    echo $row['nom']." ".$row['description']." ".$row['prix']."<br>";
    
    $DoubleCheese = "Double Cheese";
    $query->bind_param("s", $DoubleCheese);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();
    echo $row['nom']." ".$row['description']." ".$row['prix']."<br>";
    
    $RoyalCheese = "Royal Cheese";
    $query->bind_param("s", $RoyalCheese);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();
    echo $row['nom']." ".$row['description']." ".$row['prix']."<br>";
    
    
    $query->close();

    mysqli_close($dbh);