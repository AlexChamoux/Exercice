<?php 
abstract class AbstractTaskManager  {
    abstract public function addTask(string $task); // Ajout d’une tache

    abstract public function delTask(int $id); // Supprime la tâche en base

    abstract public function getAllTasks(); // Récupère toutes les tâches en cours
}

class TaskManager extends AbstractTaskManager {
    protected $_id; // L’identifiant unique de la tâche
    protected $_name; // Le nom de la tâche
    protected $_dbh; // L’instance de la connexion à la base de données
    protected $_lastId; // Pour stocker le dernier Id

    public function __construct(Database $dbh) {
        $this->dbh = $dbh;

        //Permet de sélectionner le dernier Id de la liste 
        $sql = "SELECT id FROM tache ORDER BY id DESC LIMIT 1";   
        $query = $this->dbh->prepare($sql);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        $this->lastId = $result ? $result['id'] : 0;
    }

    public function addTask(string $task) {
        //Incrémenter l'Id
        $this->lastId++;
        $id = $this->lastId;

        // Ajouter le tache dans la base de données
        $sql = "INSERT INTO tache(tache) VALUES(:tache)";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(":tache", $task, PDO::PARAM_STR);
        $query->execute();        
    }

    public function delTask(int $id) {
        $sql = "DELETE FROM tache WHERE id = :id";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function getAllTasks() {
        $sql = "SELECT * FROM tache";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        
        $tasks = $query->fetchAll(PDO::FETCH_CLASS, 'TaskManager', [$this->dbh]);
        return $tasks;
    }    
}
?>