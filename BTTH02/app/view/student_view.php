<?php
    global $conn;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlydiemdanh";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Điểm danh sinh viên</title>
</head>
<body>
  <h2>Điểm danh sinh viên</h2>

  <?php
  // Kiểm tra đăng nhập và xác thực sinh viên
  // ...

  // Lấy danh sách khóa học đang tham gia của sinh viên
  function getCourseList($student_id) {
    // Truy vấn CSDL để lấy danh sách khóa học dựa trên student_id
    // ...
    return $course_list;
  }

  // Xem trạng thái điểm danh của sinh viên trong khóa học
  function getStudentAttendance($course_id, $student_id) {
    // Truy vấn CSDL để lấy trạng thái điểm danh của sinh viên dựa trên course_id và student_id
    // ...
    return $attendance_status;
  }

  // Thực hiện điểm danh cho sinh viên
  function markStudentAttendance($course_id, $student_id, $attendance_status) {
    // Cập nhật trạng thái điểm danh của sinh viên trong CSDL dựa trên course_id và student_id
    // ...
  }

  // Xử lý khi sinh viên điểm danh
  if (isset($_POST['submit'])) {
    $course_id = $_POST['course_id'];
    $student_id = $_SESSION['student_id'];
    $attendance_status = $_POST['attendance_status'];

    markStudentAttendance($course_id, $student_id, $attendance_status);
    echo "<p>Điểm danh thành công!</p>";
  }

  // Lấy danh sách khóa học đang tham gia của sinh viên
  $course_list = getCourseList($_SESSION['student_id']);

  // Hiển thị danh sách khóa học và trạng thái điểm danh
  foreach ($course_list as $course) {
    $course_id = $course['course_id'];
    $course_name = $course['course_name'];

    $attendance_status = getStudentAttendance($course_id, $_SESSION['student_id']);
    $attendance_text = ($attendance_status == 'Present') ? 'Đã điểm danh' : 'Chưa điểm danh';

    echo "<h3>$course_name</h3>";
    echo "<p>$attendance_text</p>";

    // Form điểm danh
    echo "<form method='POST'>";
    echo "<input type='hidden' name='course_id' value='$course_id'>";
    echo "<select name='attendance_status'>";
    echo "<option value='Present'>Có mặt</option>";
    echo "<option value='Absent'>Vắng mặt</option>";
    echo "</select>";
    echo "<input type='submit' name='submit' value='Điểm danh'>";
    echo "</form>";
  }
  ?>

</body>
</html>
