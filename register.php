<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
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
    <form action="process.php" method="POST" enctype="multipart/form-data">
    ไอดี: <input type="text" name="userre" id="userre" placeholder="ไอดี"><br><br>
    พาส: <input type="password" name="passre" id="passre" placeholder="พาส"><br><br>
    ชื่อ: <input type="text" name="name" id="name" placeholder="ชื่อ"><br><br>
    รูป: <input type="file" name="fileimg" id="fileimg"><br><br>
    <input type="submit" name="save" id="save" value="Register"><br><br>
    <a href="login.php" style ="color:red;">Login</a>
    </form>
    </div>

</body>
</html>