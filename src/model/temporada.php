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

    public function addTemporada( $d_inici, $d_final, $nom_temporada, $id_apartament) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO temporada ( D_Inici, D_final, Nom_temporada, ID_Apartament) VALUES ( :d_inici, :d_final, :nom_temporada, :id_apartament)');
        $result = $insertStmt->execute([
            'd_inici' => $d_inici,
            'd_final' => $d_final,
            'nom_temporada' => $nom_temporada,
            'id_apartament' => $id_apartament,
        ]);
    }
    

    public function deleteTemporada($ID_Apartament) {
        $stm = $this->sql->prepare('DELETE FROM temporada WHERE ID_Apartament = :ID_Apartament;');
        $result = $stm->execute([':ID_Apartament' => $ID_Apartament]);
    }
}
