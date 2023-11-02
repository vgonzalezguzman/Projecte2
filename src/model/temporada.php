<?php

namespace Daw;

class Temporada {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getTemporada()
    {
        $apartaments = array();
        $query = "SELECT * FROM temporada";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($temporada = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $temporades[] = $temporada;
        }
        return $temporades;
    }

    public function addTemporada($id_temporada, $d_inici, $d_final, $nom_temporada, $tipus, $id_apartament) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO temporada (ID_Temporada, D_Inici, D_final, Nom_temporada, Tipus, ID_Apartament) VALUES (:id_temporada, :d_inici, :d_final, :nom_temporada, :tipus, :id_apartament)');
        $result = $insertStmt->execute([
            'id_temporada' => $id_temporada,
            'd_inici' => $d_inici,
            'd_final' => $d_final,
            'nom_temporada' => $nom_temporada,
            'tipus' => $tipus,
            'id_apartament' => $id_apartament,
        ]);
    }
    

    public function delete($ID_Temporada) {
        $stm = $this->sql->prepare('UPDATE Temporada SET deleted = 1 WHERE ID_Temporada = :ID_Temporada;');
        $result = $stm->execute([':ID_Temporada' => $ID_Temporada]);
    }
}
