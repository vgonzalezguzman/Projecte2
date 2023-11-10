<?php

namespace Daw;

class Serveis_apartament {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getServeis()
    {
        $serveis = array();
        $query = "SELECT * FROM serveis;";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $serveis = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $serveis;
    }

    public function addserveis($id_servei, $id_apartament, $nom_servei) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO serveis (ID_Servei, ID_Apartament, Nom_Servei) VALUES (:id_servei, :id_apartament, :nom_servei)');
        $result = $insertStmt->execute([
            'id_servei' => $id_servei,
            'id_apartament' => $id_apartament,
            'nom_servei' => $nom_servei,
        ]);
    }
    

    public function delete_serveis($id_apartament) {
        $stm = $this->sql->prepare('DELETE FROM apartamentserveis WHERE ID_Apartament = :id_apartament;');
        $result = $stm->execute([
            ':id_apartament' => $id_apartament]);
    }

    public function addApartamentosServicios($lastApartamentId, $id_servei){
  
        $insertStmt = $this->sql->prepare('INSERT INTO apartamentserveis (ID_Apartament, ID_Servei) VALUES (:lastApartamentId, :id_servei)');
        $result = $insertStmt->execute([
            ':lastApartamentId' => $lastApartamentId,
            ':id_servei' => $id_servei,
            
        ]);
       
      return $this;
    }
}
