<?php 
// đường dẫn tới file danh sách sinh viên
$file_path = "./dssv.txt";

// đọc dữ liệu từ file
$file_contents = file($file_path);

// tạo một mảng để lưu danh sách sinh viên
$student_list = array();

// duyệt qua từng dòng trong file
foreach ($file_contents as $line) {
    // tách các trường bằng dấu tab (\t)
    $fields = explode("\t", $line);
    
    // tạo một sinh viên mới
    $student = array(
        "id" => $fields[0],
        "name" => $fields[1],
        "age" => $fields[2],
        "grade" => $fields[3]
    );
    
    // thêm sinh viên vào danh sách sinh viên
    $student_list[] = $student;
}
?>
