<?php

namespace Models;

use PDO;

class UserModel
{
    const EXCEPTION_CODES = [
        "DATABASE_ERROR" => 1,
        "USERNAME_EXISTS" => 2,
        "USER_DOES_NOT_EXIST" => 3,
        "PASSWORD_TOO_SHORT" => 4,
        "PASSWORD_NOT_VERIFIED" => 5,
        "CREDENTIALS_INVALID" => 6
    ];
    public $id;
    public $username;
    public $password;

    private $db;



    /**
     * Function __construct creates PDO for later usage.
     *
     * @param string $servername Server's name that hosts mysql.
     * @param string $dbname Database name.
     * @param string $username Username for the database .
     * @param string $password Password of the user.
     * @return void
     */
    public function __construct($servername, $dbname, $username, $password)
    {
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage(), $this::EXCEPTION_CODES["DATABASE_ERROR"]);
        }
    }
    /**
     * Function __construct creates PDO for later usage.
     *
     * @param string $username Name of the new user.
     * @param string $password New user's password.
     * @param string $password_verify Password typed again.
     * @return bool
     */
    public function reg_user($username, $password, $passwordVerify)
    {
        if ($password !== $passwordVerify) {
            throw new \Exception("Passwords doesen't match", $this::EXCEPTION_CODES["PASSWORD_NOT_VERIFIED"]);
        }
        try { // This part will check if user already exists, if not then we insert one to database. Exceptions will be handled outside this function.

            if ($this->userExists(($username))) {
                throw new \Exception("username is already in use", $this::EXCEPTION_CODES["USERNAME_EXISTS"]);
            }

            $stmt = $this->db->prepare("INSERT INTO users (name,password) VALUES (?,?)");

            $passhash = password_hash($password, PASSWORD_DEFAULT);

            $stmt->execute([$username, $passhash]);

            return true;
        } catch (\PDOException $e) { // PDO exceptions will be sent with custom exception code
            throw new \Exception($e->getMessage(), $this::EXCEPTION_CODES["DATABASE_ERROR"]);
        } catch (\Exception $e) { // All custom exceptions will be rethrowed outside this function.
            throw new \Exception($e->getMessage(), $e->getCode());
        }


    }
    /**
     * Login function checks if the users credentials are correct.
     *
     * @param string $username Name of the logging user.
     * @param string $password Password of the user.
     * @return bool
     */
    public function login($username, $password)
    {
        try {
            $user = $this->userExists($username);
            if (!$user) {
                throw new \Exception("User doesen't exist.", $this::EXCEPTION_CODES["USER_DOES_NOT_EXIST"]);
            }
            if (password_verify($password, $user["password"])) {
                return true;
            }
            throw new \Exception("Credentials are invalid", $this::EXCEPTION_CODES["CREDENTIALS_INVALID"]);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage(), $this::EXCEPTION_CODES["DATABASE_ERROR"]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
    /**
     * userExist function checks if user exists
     *
     * @param string $name Name of the user that is checked.
     * @return array
     */
    public function userExists($name)
    {
        try {
            $stmt = $this->db->prepare("SELECT * from users WHERE name=?");
            $stmt->execute([$name]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage(), $this::EXCEPTION_CODES['DATABASE_ERROR']); // If pdo throws exception then we will throw exception with our own code
        }
    }
}