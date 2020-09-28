<?php
    $userId = $_GET['id'] ?? '';

    $sql = 'DELETE FROM users WHERE id="' . $userId . '"';
    
    $connect = mysqli_connect('localhost', 'root', '', 'phpclass10');

    mysqli_query($connect, $sql);
    
    header('location:index.php?module=user');