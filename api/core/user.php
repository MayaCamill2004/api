<?php

//everyclass has functions and properties

//properties
class User{
private $conn;
private $table = 'api';

//prperties of user
public $id;
public $username;
public $email;
public $password;


//function which is going to be the constructer
//contructs an object
public function __construct($db){
    $this->conn = $db;
}

//getting users from db
public function read(){
    //read query
    $query = 'SELECT *
    FROM '.$this->table.' u
    ORDER BY u.username ASC;';

    //prepare statment by using the object we have
    $stmt = $this->conn->prepare($query);

    //execute query
    $stmt->execute();

    return $stmt;

}
}