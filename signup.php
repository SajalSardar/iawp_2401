<?php
$errors = [];

if (isset($_POST['submit'])) {
    $name     = trim(htmlentities($_POST['name']));
    $email    = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $photo    = $_FILES['photo'];
    $enc_pass = md5($password);

    if (empty($name)) {
        $errors['nameErr'] = "Enter your name!";
    }

    if (empty($email)) {
        $errors['mailErr'] = 'Enter Your Email!';
    }

    if (empty($password)) {
        $errors['passErr'] = "Enter Your Password!";
    }

    if (empty($errors)) {
        require_once 'db.php';

        $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$enc_pass')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $success = "User successfully Created!";
        }
    }

}

include_once 'view/signup_html.php';