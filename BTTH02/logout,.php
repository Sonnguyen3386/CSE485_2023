<?php
    session_start();
    if(isset($_SESSION['isLogin'])){
        unset($_SESSION['isLogin']);
        header("Location: index.php");
    }
?>