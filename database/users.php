<?php
require_once __DIR__.'/connections.php';

function getAllUsers()
{
    $conn = databaseConnect();
    $result = mysqli_query($conn, 'select * from users');
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}

?>