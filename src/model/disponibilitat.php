<?php

namespace Daw;

class Disponibilitat {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getDisponiblitat()
    {
        $disponibilitat = array();
        $query = "SELECT * FROM disponibilitat";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($disponibilitat = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $disponibilitats[] = $disponibilitat;
        }
        return $disponibilitats;
    }

    public function adddisponibilitat($id_disponibilitat, $estat, $d_inici, $d_final, $id_apartament) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO disponibilitat (ID_Disponibilitat, Estat, D_Inici, D_Final, ID_Apartament) VALUES (:id_disponibilitat, :estat, :d_inici, :d_final, :id_apartament)');
        $result = $insertStmt->execute([
            'id_disponibilitat' => $id_disponibilitat,
            'estat' => $estat,
            'd_inici' => $d_inici,
            'd_final' => $d_final,
            'id_apartament' => $id_apartament,
        ]);
    }
    

    public function delete($ID_Disponibilitat) {
        $stm = $this->sql->prepare('UPDATE disponibilitat SET deleted = 1 WHERE ID_Disponibilitat = :ID_Disponibilitat;');
        $result = $stm->execute([':ID_Disponibilitat' => $ID_Disponibilitat]);
    }
}
