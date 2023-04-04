<?php 
abstract class AbstractTaskManager  {
    abstract public function addTask(string $task); // Ajout d’une tache

    abstract public function delTask(int $id); // Supprime la tâche en base

    abstract public function getAllTasks(); // Récupère toutes les tâches en cours
}

class TaskManager extends AbstractTaskManager {
    protected $_id; // l’identifiant unique de la tâche
    protected $_name; // le nom de la tâche
    protected $_dbh; // l’instance de la connexion à la base de données

    public function __construct(Database $_dbh) {
        $this->_dbh = $_dbh;        
    }

    public function getId(){
        return $this->_id;
    }

    public function setId(int $_id){
        $this->_id = $_id;
    }

    public function getName(){
        return $this->_name;
    }

    public function setName(string $_name){
        $this->_name = $_name;
    }

    public function addTask(string $task) {
        // Ajouter le tache dans la base de données
        $sql = "INSERT INTO tache(tache) VALUES(:tache)";
        $query = $this->_dbh->prepare($sql);
        $query->bindParam(":tache", $task, PDO::PARAM_STR);
        $query->execute();        
    }

    public function delTask(int $id) {
        $sql = "DELETE FROM tache WHERE id = :id";
        $query = $this->_dbh->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function getAllTasks() {
        $sql = "SELECT * FROM tache";
        $query = $this->_dbh->prepare($sql);
        $query->execute();
        
        $tasks = array(); 
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row){
            $task = new TaskManager($this->_dbh);
            $task->setId($row['id']);
            $task->setName($row['tache']);

            $tasks[] = $task;
            
        }
        return $tasks;
    }    
}
?>