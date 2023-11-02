<?php

namespace Daw;

class Reservas {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }


    public function getReservas()
    {
        $reservas = array();
        $query = "SELECT * FROM reservas";
        $stm = $this->sql->prepare($query);
        $stm->execute();

        while ($reservas = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $reservas[] = $reserva;
        }
        return $reservas;
    }

    public function addReservas($id_reserva, $data_inici, $data_final, $preu, $estat_reserva, $temps_cancelacio, $id_usuari, $id_apartament) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO reservas (id_reserva, DataInici, DataFinal, preu, EstatReserva, TempsCancelacio, ID_Usuari, ID_Apartament) VALUES (:id_reserva, :data_inici, :data_final, :preu, :estat_reserva, :temps_cancelacio, :id_usuari, :id_apartament)');
        $result = $insertStmt->execute([
            'id_reserva' => $id_reserva,
            'data_inici' => $data_inici,
            'data_final' => $data_final,
            'preu' => $preu,
            'estat_reserva' => $estat_reserva,
            'temps_cancelacio' => $temps_cancelacio,
            'id_usuari' => $id_usuari,
            'id_apartament' => $id_apartament,
        ]);
    }
    

    public function delete($ID_Reserva) {
        $stm = $this->sql->prepare('UPDATE reservas SET deleted = 1 WHERE id_reserva = :ID_Reserva;');
        $result = $stm->execute([':ID_Reserva' => $ID_Reserva]);
    }
}
