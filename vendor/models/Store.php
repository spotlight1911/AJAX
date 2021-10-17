<?php
namespace models;

use mysqli;
class Store
{

    protected $_db;

    /**
     * Store constructor.
     */
    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->_db->connect_errno != 0) {
            die($this->_db->connect_error);//TODO exeption
        }
    }

    /**
     * @return mixed
     */
    public function allUser()
    {
        $query = "SELECT * FROM users;";
        $result = $this->_db->query($query);
        if (!$result) {
            die($this->_db->error);//TODO exeption
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * @param array $newUser
     */
    public function addUser(array $newUser)
    {
        $user = join("', '", $newUser);
        $query = "INSERT INTO users VALUES (null, '$user');";
        $result = $this->_db->query($query);
        if (!$result) {
            die($this->_db->error);//TODO exeption
        }
    }

    public function getUser(int $id)
    {
        $query = "SELECT * FROM users WHERE id = $id;";
        $result = $this->_db->query($query);
        if (!$result) {
            die($this->_db->error);//TODO exeption
        }
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    public function delUser(int $id)
    {
        $query = "DELETE FROM users WHERE id = $id;";
        $result = $this->_db->query($query);
        if (!$result) {
            die($this->_db->error);//TODO exeption
        }
    }

    public function updateUser(array $user, int $id)
    {
        $name = $user['name'];
        $surname = $user['surname'];
        $photo = $user['photo'];
        $query = "UPDATE users SET name = '$name', surname = '$surname', photo = '$photo' WHERE id = $id;";
        $result = $this->_db->query($query);
        if (!$result) {
            die($this->_db->error);//TODO exeption
        }
    }
}