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
        //$conn = $this->dbSQLite();
        $conn = $this->dbPDO();
        $this->sql = $conn->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function dbPDO()
    {
        return new \Daw\DbPDO(
            $this->config["db"]["user"], 
            $this->config["db"]["pass"], 
            $this->config["db"]["dbname"], 
            $this->config["db"]["host"]
        );
    }}