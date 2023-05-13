<?php
class Student {
  private $id;
  private $name;
  private $age;
  private $grade;

  public function __construct($id, $name, $age, $grade) {
    $this->id = $id;
    $this->name = $name;
    $this->age = $age;
    $this->grade = $grade;
  }
}