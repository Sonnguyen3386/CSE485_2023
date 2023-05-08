<?php
require_once('Student.php');

class StudentDAO {
    private $students;
    
    public function __construct() {
        $this->students = array();
    }
    
    public function addStudent($student) {
        array_push($this->students, $student);
    }
    
    public function getStudentById($id) {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                return $student;
            }
        }
        return null;
    }
    
    public function getAllStudents() {
        return $this->students;
    }
}
?>