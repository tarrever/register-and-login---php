<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - user</title>
</head>
<body>
    <form action="checklogin.php" method="POST">
        ชื่อผู้ใช้: <input type="text" name="username" maxlegth="20" size="20"><br>
        รหัสผ่าน <input type="password" name="password" maxlegth="20" size="20"><br>
        <br><br>
        <input type="submit" value="เข้าสู่ระบบ" name="submit">
    </form>
</body>
</html>