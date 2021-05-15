<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
</head>
<body>
    <div class="box-welcome">
    <?php  
        session_start();
        require 'connect.php';
        error_reporting(~E_NOTICE);
        $strSQL = "SELECT * FROM user WHERE username = $_SESSION[username]";
        $objQuery = mysqli_query($conn,$strSQL,MYSQLI_ASSOC);
        
        if(!isset($_SESSION['id'])) {
            header("location: login.php");
        } else {
            echo "สวัสดีคุณ, ".$_SESSION["username"].".";
        }
    ?>
    <br><br>
    <a href="logout.php" style="text-decoration: none;color: red;">Logout</a>
    </div>
</body>
</html>