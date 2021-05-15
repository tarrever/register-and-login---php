<?php 
    session_start();
    require_once "connect.php";
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
        if($user['username'] === $username) {
            echo "<script>alert('username already exists');</script>";
        } else {
            $passwordenc = md5($password);
            $query = "INSERT INTO user (username, password, fname, lname)
                      VALUES ('$username','$passwordenc','$fname','$lname')";
            $result = mysqli_query($conn, $query);
            if($result) {
                $_SESSION['success'] = "Insert success";
                header("location: login.php");
            } else {
                $_SESSION['error'] = "Something wrong";
                header("location: login.php");
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        ชื่อผู้ใช้: <input type="text" maxlength="30" size="30" name="username" required /><br>
        รหัสผ่าน: <input type="password" maxlength="30" size="30" name="password" required /><br>
        ชื่อ: <input type="text" maxlength="100" size="30" name="fname" required /><br>
        นามสกุล: <input type="text" maxlength="100" size="30" name="lname" required /><br>
        <input type="submit" value="ยืนยัน" name="submit">
    </form>
</body>
</html>