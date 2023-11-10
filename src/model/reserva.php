<?php

namespace Daw;

class Reservas {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getReservasUsuari($ID_Usuari)
    {
        $query = "SELECT r.id_reserva, r.DataInici, r.DataFinal, r.preu, r.EstatReserva, r.TempsCancelacio, a.ID_Apartament, a.Titol, a.Adr_Postal, a.Descripcio, a.Metres_Cuadrats, a.N_Habitacions, a.Preu_TBaixa, a.Preu_TAlt, a.Dies_Cancelacio, img.Img_Apartament FROM reservas r JOIN apartament a ON r.ID_Apartament = a.ID_Apartament LEFT JOIN ( SELECT ID_Apartament, GROUP_CONCAT(URL SEPARATOR ', ') AS Img_Apartament FROM img_apartament GROUP BY ID_Apartament ) img ON img.ID_Apartament = a.ID_Apartament WHERE r.ID_Usuari = :ID_Usuari;";
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([
            'ID_Usuari' => $ID_Usuari
        ]);
        $reservas = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $reservas;
    }

    public function getReservasPis()
    {
        $query = "SELECT * FROM reservas";
        $stm = $this->sql->prepare($query);
        $stm->execute();
        $reservas = $stm->fetch(\PDO::FETCH_ASSOC);
        return $reservas;
    }

    public function addReservas($data_inici, $data_final, $preu, $temps_cancelacio, $id_usuari, $id_apartament) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO reservas (DataInici, DataFinal, preu, TempsCancelacio, ID_Usuari, ID_Apartament) VALUES (:data_inici, :data_final, :preu, :temps_cancelacio, :id_usuari, :id_apartament)');
        $result = $insertStmt->execute([
            'data_inici' => $data_inici,
            'data_final' => $data_final,
            'preu' => $preu,
            'temps_cancelacio' => $temps_cancelacio,
            'id_usuari' => $id_usuari,
            'id_apartament' => $id_apartament,
        ]);
    }
    
    public function delete($ID_Apartament) {
        $stm = $this->sql->prepare('delete from reservas WHERE ID_Apartament = :ID_Apartament;');
        $result = $stm->execute([':ID_Apartament' => $ID_Apartament]);
    }
}
