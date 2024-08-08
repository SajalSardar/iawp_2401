<?php

require_once 'db.php';

$select_query = "SELECT * FROM users";

$result = mysqli_query($conn, $select_query);

if (mysqli_num_rows($result) > 0) {
    $users = mysqli_fetch_all($result, true);
    
}

include_once 'view/users_html.php';