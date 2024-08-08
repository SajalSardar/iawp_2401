<?php

$id = $_GET['id'];

require_once 'db.php';

$select_query = "SELECT id, name,email,photo FROM users WHERE id = $id";

$result = mysqli_query($conn, $select_query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

}

// update code

$errors = [];

if (isset($_POST['submit'])) {
    $name  = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $photo = $_FILES['photo'];

    if (empty($name)) {
        $errors['nameErr'] = "Enter your name!";
    }

    if (empty($email)) {
        $errors['mailErr'] = 'Enter Your Email!';
    }

    if (empty($errors)) {

        $query = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE id = $id";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $success = "User  successfully updated!";

            header('Location:users.php');

        }
    }

}

include_once 'view/edit_html.php';