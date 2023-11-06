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

    
    public function getLastId($ID_Usuari){
        $stm = $this->sql->prepare("SELECT MAX(ID_Apartament) AS last_id, ID_Usuari FROM apartament;");
        $stm->execute();
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result && isset($result['last_id'])){
            return $result['last_id'];
        } else {
            return null;
        }
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
    
    public function addApartamentosImages($lastApartamentId, $image_name) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO img_apartament (ID_Apartament, URL) VALUES (:lastApartamentId, :image_name)');

        $result = $insertStmt->execute([
            ':lastApartamentId' => $lastApartamentId,
            ':image_name' => $image_name,
            
        ]);
       return $this;
    }

    public function addApartamentosServicios($lastApartamentId, $id_servei){
        $insertStmt = $this->sql->prepare('INSERT INTO apartamentserveis (ID_Apartament, ID_Servei) VALUES (:lastApartamentId, :id_servei)');
        $result = $insertStmt->execute([
            ':lastApartamentId' => $lastApartamentId,
            ':id_servei' => $id_servei,
            
        ]);
      return $this;
    }
    public function delete($ID_Apartament) {
        $stm = $this->sql->prepare('UPDATE apartament SET deleted = 1 WHERE ID_Apartament = :ID_Apartament;');
        $result = $stm->execute([':ID_Apartament' => $ID_Apartament]);
    }


  
}
