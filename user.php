<?php

$id = $_GET['id'];

require_once 'db.php';

$select_query = "SELECT id, name,email,photo FROM users WHERE id = $id";

$result = mysqli_query($conn, $select_query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

}

include_once 'view/user_html.php';