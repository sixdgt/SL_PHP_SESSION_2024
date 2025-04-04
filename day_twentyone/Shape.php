<?php
class Shape{
    // attributes
    public $size;
    public $category;
    // constructor
    public function __construct($size, $category){
        $this->size = $size;
        $this->category = $category;
    }
    // method
    public function shapeInfo(){
        echo "Basic shape";
    }
}