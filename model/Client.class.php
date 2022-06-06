<?php

class Client {
    private $name;
    private $email;
    private $phone;
    
    // Constructor
    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    
    // Return name
    public function getName() {
        return $this->name;
    }
    
    // Change name
    public function setName($newName) {
        $this->name = $newName;
    }
    
    // Return e-mail address
    public function getEmail() {
        return $this->email;
    }
    
    // Change e-mail address
    public function setEmail($newEmail) {
        $this->email = $newEmail;
    }
    
    // Return phone number
    public function getPhone() {
        return $this->phone;
    }
    
    // Change phone number
    public function setPhone($newPhone) {
        $this->phone = $newPhone;
    }
}
