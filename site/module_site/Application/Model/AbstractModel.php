<?php

namespace Application\Model;

use Application\Database\Connection;

abstract class AbstractModel implements ModelInterface {

    protected static $connection;

    /**
     * Faz a conexão com a base de dados
     *
     * @return \Application\Database\Connection
     */
    public function connect() {
        return is_null(self::$connection) ? new Connection("mysql", "root2", "root", "database") : 
        self::$connection; }

    /**
     * Retorna a conexão para uso
     *
     * @return \Application\Database\Connection
     */
    public function getConnection() {

        return $this->connect();
    }

}