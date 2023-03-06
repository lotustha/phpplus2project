<?php
class Student{
    public $name;
    public $roll;
    public function __construct($name, $roll) {
        $this->name = $name;
        $this->roll = $roll;
      }
      public function greet() {
        return "Hello, My name is" . $this->name . " and my roll no is " . $this->roll . "!";
      }
}
?>