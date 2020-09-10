<?php
include ("connect.php");
$user = $_REQUEST["userre"];
$password = $_REQUEST["passre"];
$name = $_REQUEST["name"];
//$file_name = $_REQUEST["fileimg"];

$img_folder = "img/";
$imageFileType = strtolower($_FILES["fileimg"]["name"]);
$type = strrchr($imageFileType,".");
$datetime_name_file = date("YmdHis");
$img_file_new = $img_folder.$datetime_name_file.$type;

$x = 1;
$chk = getimagesize($_FILES["fileimg"]["tmp_name"]);
if($chk!=false){
    $x=1;
    echo $chk["mime"];
}else{
    echo "ไม่เจอข้อมูลภาพ";
}
if(file_exists($img_file_new)){
    $x=0;
}
if($_FILES["fileimg"]["size"]>5000000){
    $x=0;
}
if($x==0){
    echo "ไม่สามารถอัพโหลดได้";
}
else{
    if($type==".jpg"){
        $sql = "INSERT INTO `employee`(`username`, `password`, `name`, `filename`) 
        VALUES ('$user','$password','$name','$img_file_new')";

        if(@mysqli_query($condb,$sql)){
            echo "Register Complete";
            
            move_uploaded_file($_FILES["fileimg"]["tmp_name"],$img_file_new);
            
            header("location:login.php");
        }
        else{echo "Error".$sql.mysqli_error($condb);
        }
    @mysqli_close($condb);
    
    }
}



?>