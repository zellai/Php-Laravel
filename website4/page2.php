<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Php Sessions</title>
</head>
<body>
<h5>Thank you <?php echo $name; ?>, you have subscribed with the email <?php echo $email; ?></h5>
</body>
</html>