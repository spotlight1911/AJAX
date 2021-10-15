<?php
namespace models;

use mysqli;
class Store{

    protected $_db;

    /**
     * Store constructor.
     */
    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->_db->connect_errno !=0){
            die($this->_db->connect_error);//TODO exeption
        }
    }

    /**
     * @return mixed
     */
    public function allUser(){
        $query = "SELECT * FROM news;";
        $result = $this->_db->query($query);
        if(!$result){
            die($this->_db->error);//TODO exeption
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * @param array $newUsers
     */
    public function addUser(array $newUsers){
        $user = join("', '", $newUsers);
        $query = "INSERT INTO users value (null, $user);";
    }

    public function getUser(int $id){
        $query = "SELECT * FROM users WHERE id = $id;";
        re
    }
}