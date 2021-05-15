<?php 
    session_start();
    if(isset($_POST['username'])) {
        include('connect.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];

            header("location: index.php");
        } else {
            echo "<script>";
            echo "alert (\" user หรือ password ไม่ถูกต้อง\");";
            echo "window.history.back()";
            echo "</script>";
        }
    } else {
        header ("location: index.php");
    }
?>