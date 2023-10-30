<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Model les imatges.
 **/

namespace Daw;

/**
 * Imatges
 */
class Apartaments
{

    private $sql;

    /**
     * Constructor de la classe imatges amb PDO
     *
     * @param array $config
     */
    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    /**
     * llistat de les imatges
     *
     * @return array d'imatges amb ["title", "url"]
     */
    public function all()
    {
        $query = "select * from apartament;";
        $images = array();
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $image) {
            $images[$image["id"]] = $image;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        //print_r($images);
        return $images;
    }
}