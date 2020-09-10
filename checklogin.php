<?php
include("connect.php");
$user_chk = $_REQUEST["user"];
$pass_chk = $_REQUEST["pass"];

$sql = "SELECT * FROM employee WHERE username = '$user_chk'";
$result1 = @mysqli_query($condb,$sql);

if(@mysqli_num_rows($result1)>0){
   $row = @mysqli_fetch_array($result1);
   if($row["username"]==$user_chk && $row["password"]==$pass_chk){
    header("location:admin.php");
    //echo $pass_chk.$row["password"];
   }
   else{header("location:login.php");}
   
}else{header("location:login.php");}
@mysqli_close($condb);
?>