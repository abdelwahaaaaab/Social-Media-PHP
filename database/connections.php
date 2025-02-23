<?php
function databaseConnect()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect('localhost','root', '', 'social media');
    return $conn;
}

?>