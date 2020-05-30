<?php
class User{
    public $username = NULL;
    public $password = NULL;
    public $firstName = NULL;
    public $lastName = NULL;
    public function __construct($username, $password, $firstName, $lastName) {
        $this->username = $username;
        $this->password =  password_hash($password,PASSWORD_DEFAULT);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getFullname(){
        return $this->firstName.$this->lastName;
    }
    public function getUsername(){
        return $this->username;
    }
    public function login($user,$pass){
        if($user == "admin" && 
        password_verify ( $pass, 
        password_hash("12345",PASSWORD_DEFAULT))){
            return true;
        }
    }
}