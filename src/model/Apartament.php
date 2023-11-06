<?php

namespace Daw;

class Apartaments {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getApartamentos()
    {
        $stm = $this->sql->prepare("SELECT * FROM apartament;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getApartamentosImages()
    {
        $stm = $this->sql->prepare("SELECT a.*, ( SELECT GROUP_CONCAT(i.URL SEPARATOR ', ') FROM img_apartament i WHERE i.ID_Apartament = a.ID_Apartament ) AS Img_Apartament FROM apartament a;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getApartamentosRandom()
    {
        $stm = $this->sql->prepare("SELECT * FROM img_apartament i WHERE i.ID_Apartament = ( SELECT a.ID_Apartament FROM apartament a ORDER BY RAND() LIMIT 1);");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
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
        $stm = $this->sql->prepare('DELETE FROM apartament WHERE ID_Apartament = :ID_Apartament');
        $result = $stm->execute([':ID_Apartament' => $ID_Apartament]);
    }
    

    public function getApartamentosByID($ID_Usuari){
        $stm = $this->sql->prepare("SELECT * FROM apartament WHERE ID_Usuari = $ID_Usuari;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectApartamentByID($ID_Apartament){
        $stm = $this->sql->prepare("SELECT * FROM apartament WHERE ID_Apartament = :ID_Apartament;");
        $stm->execute(["ID_Apartament"=> $ID_Apartament]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function EditApartamentById($ID_Apartament, $title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion) {
        $sql = 'UPDATE apartament 
                SET Titol = :title, 
                    Adr_Postal = :postal, 
                    Descripcio = :descripcion, 
                    Metres_Cuadrats = :metros, 
                    N_Habitacions = :habitaciones, 
                    Preu_TBaixa = :TBaja, 
                    Preu_TAlt = :TALT, 
                    Dies_Cancelacio = :cancelacion
                WHERE ID_Apartament = :ID_Apartament';
        
        $stm = $this->sql->prepare($sql);
        $stm->execute([
            ':ID_Apartament' => $ID_Apartament,
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
