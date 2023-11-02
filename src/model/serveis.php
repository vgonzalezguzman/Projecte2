<?php

namespace Daw;

class Serveis {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getServeis()
    {
        $serveis = array();
        $query = "SELECT * FROM serveis";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($servei = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $serveis[] = $servei;
        }
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
    

    public function delete($ID_servei) {
        $stm = $this->sql->prepare('UPDATE serveis SET deleted = 1 WHERE ID_Servei = :ID_Servei;');
        $result = $stm->execute([':ID_Servei' => $ID_Servei]);
    }
}
