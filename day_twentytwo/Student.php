<?php

class Student {
    // encapsulation in php
    // public attributes
    public $name;
    public $age;
    public $address;

    // protected attributes
    protected $email;
    protected $dob;

    // private attributes
    private $reg_no;
    private $contact;
    private $gender;

    // get method for protected attributes
    public function getEmail(){
        return $this->email;
    }

    public function getDob(){
        return $this->dob;
    }

    // set method for protected attributes
    public function setEmail($param_email){
        $this->email = $param_email;
    }

    public function setDob($param_dob){
        $this->dob = $param_dob;
    }

    // get method for private attributes
    public function getRegNo(){
        return $this->reg_no;
    }

    public function getContact(){
        return $this->contact;
    }

    public function getGender(){
        return $this->gender;
    }

    // set method for private attributes
    public function setRegNo($param_reg_no){
        $this->reg_no = $param_reg_no;
    }

    public function setContact($param_contact){
        $this->contact = $param_contact;
    }

    public function setGender($param_gender){
        $this->gender = $param_gender;
    }
}

// creating object
$std = new Student();

// setting values for attributes
// public attributes
$std->name = "Sushant KC";
$std->age = 23;
$std->address = "Kathmandu";

// protected attributes
$std->setEmail("sushantkc@gmail.com");
$std->setDob("2001-09-24");

// private attributes - cannot store directly
// so need to create public method to store in private attributes
$std->setRegNo("002");
$std->setContact("98746321");
$std->setGender("Male");

// accessing attributes
echo "Name: {$std->name} <br />";
echo "Age: {$std->age} <br />";
echo "Address: {$std->address} <br />";
echo "Email: {$std->getEmail()} <br />";
echo "Date of Birth: {$std->getDob()} <br />";
echo "Registration No: {$std->getRegNo()} <br />";
echo "Contact: {$std->getContact()} <br />";
echo "Gender: {$std->getGender()} <br />";