<?php
    class StudentDAO {
        private $students;
      
        public function __construct() {
          $this->students = array();
        }
      
        public function create($student) {
          array_push($this->students, $student);
        }
      
        public function read($id) {
          foreach ($this->students as $student) {
            if ($student->getId() == $id) {
              return $student;
            }
          }
          return null;
        }
      
        public function update($id, $student) {
          foreach ($this->students as $key => $value) {
            if ($value->getId() == $id) {
              $this->students[$key] = $student;
            }
          }
        }
      
        public function delete($id) {
          foreach ($this->students as $key => $value) {
            if ($value->getId() == $id) {
              unset($this->students[$key]);
            }
          }
        }
      
        public function getAll() {
          return $this->students;
        }
      }


?>