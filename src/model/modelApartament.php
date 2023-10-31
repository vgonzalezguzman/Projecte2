<?php

namespace Daw;

class Apartaments
{
    public $sql;

    public function __construct($sql)
    {
        $this->sql = $sql;
    }

    public function get($id)
    {
        $query = 'select * from apartament WHERE id = :id;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':id' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error. {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function all()
    {
        $query = "select * from apartament;";
        $apartments = array();
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $apartment) {
            $apartments[$apartment["id"]] = $apartment;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error. {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }

        return $apartments;
    }
}
