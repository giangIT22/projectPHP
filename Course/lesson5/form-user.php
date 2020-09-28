<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form User</title>
</head>
<body>
    <?php
        if (isset($_SESSION['errors']) && $_SESSION['errors'] != null)  {
            foreach ($_SESSION['errors'] as $error) {
                echo '<li>' . $error . '</li>';
            }
        }
    ?>
    <form action="process-login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" />
        <br/>
        <label>Password</label>
        <input type="password" name="password" />
        <br/>
        <label>&nbsp;</label>
        <button type="submit">Login</button>
    </form>
</body>
</html>