<?php

namespace Daw;

class Img_apartament {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getImg_apartament()
    {
        $query = "SELECT * FROM img_apartament";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $img_apartament = $stm->fetch(\PDO::FETCH_ASSOC);
        return $img_apartament;
    }
    
    public function getImatgesRandom()
    {
        $stm = $this->sql->prepare("SELECT * FROM img_apartament i WHERE i.ID_Apartament = ( SELECT a.ID_Apartament FROM apartament a ORDER BY RAND() LIMIT 1);");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function addApartamentosImages($lastApartamentId, $url) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO img_apartament (ID_Apartament, URL) VALUES (:lastApartamentId, :url)');

        $result = $insertStmt->execute([
            ':lastApartamentId' => $lastApartamentId,
            ':url' => $url,
            
        ]);
    }
    

    public function delete_img($id_apartament) {
        $stm = $this->sql->prepare('DELETE FROM img_apartament WHERE ID_Apartament = :id_apartament;');
        $result = $stm->execute([':id_apartament' => $id_apartament]);
    }
}
