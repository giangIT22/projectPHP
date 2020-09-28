<?php
    session_start();
    $students = ['Giang', 12, 'giang22.fit@gmail.com'];

    $_SESSION['students'] = $students;

?>
    <a href="page2.php" target="__blank">chuyển page</a>