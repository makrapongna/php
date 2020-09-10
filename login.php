<html>
<head>
<meta charset="UTF-8">
<title>test</title>
<style>
        input {
            border:1px solid #ccc;
            width:200px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
</head>
<body>
    <div align="center">
    <form action="checklogin.php" method="POST">
    <input type="text" name="user" id="user" placeholder="Username">
    <input type="text" name="pass" id="pass" placeholder="Password">
    <input type="submit" name="login" id="login" value="Login">
    <a href="register.php" style ="color:red;">Register</a>
    </form>
    </div>

</body>
</html>