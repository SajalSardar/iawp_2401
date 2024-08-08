<?php

$id = $_GET['id'];

require_once 'db.php';

$delete_query = "DELETE FROM `users` WHERE id = $id";

$result = mysqli_query($conn, $delete_query);

if ($result) {
    header('Location:users.php');
}