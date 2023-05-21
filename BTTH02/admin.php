<?php

session_start();
if (!isset($_SESSION['isLogin'])) {
    header("Location: index.php");
}

?>
<h1>Welcome Admin</h1>
<a href="logout.php">logout</a>
