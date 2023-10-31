<?php

namespace Daw;

class Apartaments {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getApartamentos()
    {
        $apartaments = array();
        $query = "SELECT * FROM apartament";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($apartament = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apartaments[] = $apartament;
        }
        return $apartaments;
    }

    public function addapartament($title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion ,$ID_Usuari) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO apartament (Titol, Adr_Postal, Descripcio, Metres_Cuadrats, N_Habitacions, Preu_TBaixa, Preu_Talt, Dies_Cancelacio, ID_Usuari) VALUES (:title, :postal, :descripcion, :metros, :habitaciones, :TBaja, :TALT, :cancelacion, :ID_Usuari)');
        $result = $insertStmt->execute([
            ':title' => $title,
            ':postal' => $postal,
            ':descripcion' => $descripcion,
            ':metros' => $metros,
            ':habitaciones' => $habitaciones,
            ':TBaja' => $TBaja,
            ':TALT' => $TALT,
            ':cancelacion' => $cancelacion,
            ':ID_Usuari' => $ID_Usuari,
        ]);
    }
    

    public function delete($ID_Apartament) {
        $stm = $this->sql->prepare('UPDATE apartament SET deleted = 1 WHERE ID_Apartament = :ID_Apartament;');
        $result = $stm->execute([':ID_Apartament' => $ID_Apartament]);
    }
}
