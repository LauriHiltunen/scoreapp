<?php

namespace Models;
use PDO;

class UserModel {
    public $id;
    public $username;
    public $password;

    private $db;

    /**
 * An example of a project-specific implementation.
 *
 * @param string $servername Server name.
 * @param string $dbname Database name.
 * @param string $username Username for the database .
 * @param string $password Database user password.
 * @return void
 */
    public function __construct($servername,$dbname,$username,$password) {
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            die("". $e->getMessage());
        }
    }
}