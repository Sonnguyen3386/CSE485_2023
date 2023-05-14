<?php
require_once '../model/student.php';
require_once '../model/studentDAO.php';

if (isset($_POST['add'])) {
    // Tạo đối tượng DAO và đọc dữ liệu từ file students.txt
    $dao = new StudentDAO('../student.txt');
    $dao->readData();

    // Lấy thông tin từ form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

}
