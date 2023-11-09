<?php

namespace Daw;

class Apartaments {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getApartamentosImages()
    {
        $stm = $this->sql->prepare("SELECT a.*, ( SELECT GROUP_CONCAT(i.URL SEPARATOR ', ') FROM img_apartament i WHERE i.ID_Apartament = a.ID_Apartament ) AS Img_Apartament FROM apartament a;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    public function getNameApartamentosReservados() {
        $stm = $this->sql->prepare("SELECT DISTINCT a.Titol, a.ID_Apartament FROM apartament a LEFT JOIN reservas r ON a.ID_Apartament = r.ID_Apartament;");
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getReservasGestor($ID_Usuari)
    {
        $stm = $this->sql->prepare("SELECT a.*, r.*, u.*, SUBSTRING_INDEX(GROUP_CONCAT(i.URL), ',', 1) AS img_url FROM apartament a LEFT JOIN reservas r ON a.ID_Apartament = r.ID_Apartament LEFT JOIN img_apartament i ON a.ID_Apartament = i.ID_Apartament LEFT JOIN usuari u ON r.ID_Usuari = u.ID_Usuari WHERE a.ID_Usuari = :ID_Usuari GROUP BY a.ID_Apartament, r.id_reserva;");
        $stm->execute([
            'ID_Usuari' => $ID_Usuari
        ]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getReservasGestorIDApartament($ID_Usuari,$ID_Apartament)
    {
        $stm = $this->sql->prepare("SELECT a.*, r.*, u.*, SUBSTRING_INDEX(GROUP_CONCAT(i.URL), ',', 1) AS img_url FROM apartament a LEFT JOIN reservas r ON a.ID_Apartament = r.ID_Apartament LEFT JOIN img_apartament i ON a.ID_Apartament = i.ID_Apartament LEFT JOIN usuari u ON r.ID_Usuari = u.ID_Usuari WHERE a.ID_Usuari = :ID_Usuari AND r.ID_Apartament = :ID_Apartament GROUP BY a.ID_Apartament, r.id_reserva;");
        $stm->execute([
            'ID_Usuari' => $ID_Usuari,
            'ID_Apartament' => $ID_Apartament
        ]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getReservaGestorIDArrendatari($ID_Usuari,$ID_Apartament,$ID_Arrendatari) 
    {
        $stm = $this->sql->prepare("SELECT a.*, r.*, u.*, SUBSTRING_INDEX(GROUP_CONCAT(i.URL), ',', 1) AS img_url FROM apartament a LEFT JOIN reservas r ON a.ID_Apartament = r.ID_Apartament LEFT JOIN img_apartament i ON a.ID_Apartament = i.ID_Apartament LEFT JOIN usuari u ON r.ID_Usuari = u.ID_Usuari WHERE a.ID_Usuari = :ID_Usuari AND r.ID_Apartament = :ID_Apartament AND r.ID_Usuari = :ID_Arrendatari GROUP BY a.ID_Apartament, r.id_reserva;");
        $stm->execute([
            'ID_Usuari' => $ID_Usuari,
            'ID_Apartament' => $ID_Apartament,
            'ID_Arrendatari' => $ID_Arrendatari
        ]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getReservaGestorNomesArrendatari($ID_Usuari, $ID_Arrendatari) 
        {
            $stm = $this->sql->prepare("SELECT a.*, r.*, u.*, SUBSTRING_INDEX(GROUP_CONCAT(i.URL), ',', 1) AS img_url FROM apartament a LEFT JOIN reservas r ON a.ID_Apartament = r.ID_Apartament LEFT JOIN img_apartament i ON a.ID_Apartament = i.ID_Apartament LEFT JOIN usuari u ON r.ID_Usuari = u.ID_Usuari WHERE a.ID_Usuari = :ID_Usuari AND r.ID_Usuari = :ID_Arrendatari GROUP BY a.ID_Apartament, r.id_reserva;");
            $stm->execute([
                'ID_Usuari' => $ID_Usuari,
                'ID_Arrendatari' => $ID_Arrendatari
            ]);
            $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    
    public function confirmReservation($ID_Reserva) {
        $stm = $this->sql->prepare("UPDATE `reservas` SET `EstatReserva` = 'CONFIRMAT' WHERE `reservas`.`id_reserva` = :ID_Reserva;");
        $stm->execute([
            'ID_Reserva' => $ID_Reserva
        ]);
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function cancelReservation($ID_Reserva) {
        $stm = $this->sql->prepare("UPDATE `reservas` SET `EstatReserva` = 'CANCELAT' WHERE `reservas`.`id_reserva` = :ID_Reserva;");
        $stm->execute([
            'ID_Reserva' => $ID_Reserva
        ]);
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

    public function addapartament($title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion ,$ID_Usuari, $Carrer) {
        // Si el título no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO apartament (Titol, Adr_Postal, Descripcio, Metres_Cuadrats, N_Habitacions, Preu_TBaixa, Preu_Talt, Dies_Cancelacio, ID_Usuari, Carrer) VALUES (:title, :postal, :descripcion, :metros, :habitaciones, :TBaja, :TALT, :cancelacion, :ID_Usuari, :Carrer)');
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
            ':Carrer' => $Carrer
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

    public function EditApartamentById($ID_Apartament, $title, $postal, $descripcion, $metros, $habitaciones, $TBaja, $TALT, $cancelacion, $Carrer) {
        $sql = 'UPDATE apartament 
                SET Titol = :title, 
                    Adr_Postal = :postal, 
                    Descripcio = :descripcion, 
                    Metres_Cuadrats = :metros, 
                    N_Habitacions = :habitaciones, 
                    Preu_TBaixa = :TBaja, 
                    Preu_TAlt = :TALT, 
                    Dies_Cancelacio = :cancelacion,
                    Carrer = :Carrer
                WHERE ID_Apartament = :ID_Apartament' ;
        
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
            ':cancelacion' => $cancelacion,
            ':Carrer' => $Carrer
        ]);
    }
    
}
