<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Container: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = $this->db()->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function db(){
        return new \Daw\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }

    public function users()
    {
        return new \Daw\Users($this->sql);
    }
    
    public function apartaments()
    {
        return new \Daw\Apartaments($this->sql);
    }

    public function images()
    {
        return new \Daw\Img_apartament($this->sql);
    }
    public function reservas()
    {
        return new \Daw\Reservas($this->sql);
    }
    public function Serveis()
    {
        return new \Daw\Serveis($this->sql);
    }
    public function temporada()
    {
        return new \Daw\Temporada($this->sql);
    }
    public function disponibilitat()
    {
        return new \Daw\Disponibilitat($this->sql);
    }
    public function Img_apartament()
    {
        return new \Daw\Img_apartament($this->sql);
    }   

    public function Serveis_apartament()
    {
        return new \Daw\Serveis_apartament($this->sql);
    }

}