<?php 
    $conn = mysqli_connect("localhost","root","","test_db");
    mysqli_set_charset($conn, 'utf-8');
    if(!$conn) {
        die("failed to connect to database".mysqli_error($conn));
    }
?>