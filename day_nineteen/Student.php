<?php 
// class
class Student {
    // attributes
    public $name;
    public $age;
    public $address;
    public $email;
    // constructor - creates or builds object of class
    // __construct() method is used as constructor in php
    // in this case the following constructor is a default constructor
    // it will be called when a new object of Student class is created
    public function __construct(){
        $this->name = "Sagar Dhakal";
        $this->age = 23;
        $this->address = "Dhadeldhura";
        $this->email = "sagardhakal@gmail.com";
    }
    // method 
    public function displayStudent(){
        echo "Name: ". $this->name. "<br>";
        echo "Age: ". $this->age. "<br>";
        echo "Address: ". $this->address. "<br>";
        echo "Email: ". $this->email. "<br>";
    }
}

// creating object of class Student
$student = new Student();

// to reference attributes, properties and methods 
// in php `->` symbol is use

// calling method displayStudent() of class Student
$student->displayStudent();