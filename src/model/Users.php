<?php

namespace Daw;

class Users {

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
        $query = "select id, user, pass from users;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $task) {
            $tasks[] = $task;
        }

        return $tasks;
    }

    // public function add($task) {
    //     $stm = $this->sql->prepare('insert into tasks (task,deleted) values (:task, 0);');
    //     $result = $stm->execute([':task' => $task]);
    // }

    public function login($email, $pass) {
        $stm = $this->sql->prepare('SELECT Email, pass FROM usuari WHERE Email = :Email;');
        $stm->execute([':Email' => $email]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
    
        if (is_array($result) && $result["pass"] == $pass) {
            return $result;
        } else {
            return false;
        }
    }
    

    public function register($name, $lastname, $phone, $mail, $cardnumber, $pass) {
        // Verificar si el correo electrónico ya está registrado
        $checkStmt = $this->sql->prepare('SELECT * FROM usuari WHERE Email = :mail');
        $checkStmt->execute([':mail' => $mail]);
    
        // Obtener el número de filas afectadas por la consulta SELECT
        $emailExists = $checkStmt->rowCount();
    
        // Si el correo electrónico ya está registrado, devuelve un mensaje de error
        if ($emailExists > 0) {
            return "El correo electrónico ya está registrado.";
        }
    
        // Si el correo electrónico no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO usuari (Nom, Cognoms, Telefon, Email, Tarjeta, Rol, pass) VALUES (:n, :lastname, :phone, :mail, :cardnumber,"Normal" , :pass );');
        $result = $insertStmt->execute([
            ':n' => $name,
            ':lastname' => $lastname,
            ':phone' => $phone,
            ':mail' => $mail,
            ':cardnumber' => $cardnumber,
            ':pass' => $pass
        ]);
   
    }

    public function addapartament($title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO apartament (Titol, Adr_Postal, Descripcio, Metres_Cuadrats, N_Habitacions, Preu_TBaixa, Preu_Talt, Dies_Cancelacio) VALUES (:title, :postal, :descripcion, :metros, :habitaciones, :TBaja, :TALT, :cancelacion)');
        $result = $insertStmt->execute([
            ':title' => $title,
            ':postal' => $postal,
            ':descripcion' => $descripcion,
            ':metros' => $metros,
            ':habitaciones' => $habitaciones,
            ':TBaja' => $TBaja,
            ':TALT' => $TALT,
            ':cancelacion' => $cancelacion
        ]);
    }    

}