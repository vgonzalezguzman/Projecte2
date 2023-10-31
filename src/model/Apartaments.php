<?php

namespace Daw;

class Apartaments {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $stm = $this->sql->prepare("SELECT ID_Apartament, Titol, Adr_Postal, Descripcio, Metres_Cuadrats, N_Habitacions, Preu_TBaixa, Preu_TAlt, Dies_Cancelacio FROM apartament WHERE deleted=0;");
        $stm->execute();
        
        $apartaments = array();
        while ($apartament = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apartaments[] = $apartament;
        }
        return $apartaments;
    }

    
    

    
}