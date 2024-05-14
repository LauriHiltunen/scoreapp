<?php

namespace Models;

use PDO;

class UserModel
{
    public $id;
    public $username;
    public $password;

    private $db;

    /**
     * Function __construct.
     *
     * @param string $servername Server's name that hosts mysql.
     * @param string $dbname Database name.
     * @param string $username Username for the database .
     * @param string $password The password of the user.
     * @return void
     */
    public function __construct($servername, $dbname, $username, $password)
    {
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            die("" . $e->getMessage());
        }
    }

    public function reg_user($username, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT users.id from users WHERE username=:username");
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            if ($stmt->fetch(PDO::FETCH_ASSOC)) {
                return false;
            }
            $stmt = $this->db->prepare("INSERT INTO users (username,'password') VALUES (?,?)");
            // $stmt->execute(array())
            return true;
        } catch (PDOException $e) {
            die("" . $e->getMessage());
        }
    }

    public function login($username, $password)
    {
        $stmt = $this->db->prepare("SELECT users.password FROM users WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $row["password"])) {
            return true;
        }
        return false;
    }
}