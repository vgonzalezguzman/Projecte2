<?php

namespace Daw;

class Tasks {

    public $sql;

    public function __construct($user, $pass, $db, $host){

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function getAll(){
        $tasks = array();
        $query = "select id, task from tasks where deleted=0;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
            $tasks[] = $task;
        }

        return $tasks;
    }

    public function add($task) {
        $stm = $this->sql->prepare('insert into tasks (task,deleted) values (:task, 0);');
        $result = $stm->execute([':task' => $task]);
    }

}