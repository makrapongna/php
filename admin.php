<html>
<head>
<meta charset = "UTF-8">
<title>
</title>
<style>
body{
    
}
h1{
    border-radius: 25px;
    padding: 10px;
    width: 200px;
    height: 20;
    background: silver;
    font-size: 15px;
}
h2{
    border-radius: 25px;
    padding: 10px;
    width: 200px;
    height: 20;
    background: gold;
    font-size: 15px;
}
h3{
    border-radius: 25px;
    padding: 10px;
    width: 200px;
    height: 20;
    background: brown;
    font-size: 15px;
}
h4{
    border-radius: 25px;
    padding: 10px;
    width: 300px;
    height: 300;
    background: blue;
}
</style>
</head>
<body background>

<div>
    <form action="admin.php" method="POST">
    <input type="text" name="find" id="find">
    <input type="submit" name="search" id="search" value="SEARCH">
    </form>
</div>
<div>
    <?php
        include("connect.php");
        //echo "<script type = text/javascript>alert("ssssss")</script>";
        $find_id = isset($_REQUEST["find"]) ? $_REQUEST["find"] : "";
        if($find_id!=""){
            $sql = "SELECT * FROM employee WHERE id = ".$find_id;
        }else{
            $sql = "SELECT * FROM employee"; 
        }
        $result = @mysqli_query($condb,$sql);

        if(@mysqli_num_rows($result)>0){
            echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>username</th>";
                echo "<th>name</th>";
                echo "<th>Image</th>";
               
                
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td><h1>" . $row['id'] . "</h1></td>";
                            echo "<td><h2>" . $row['username'] . "</h2></td>";
                            echo "<td><h3>" . $row['name'] . "</h3></td>";
                            echo "<td><h4>"."<img src="."'". $row['filename']."'" ."width='300' height='300'"." ></h4></td>";
                            
                        echo "</tr>";
                    }
            echo "</table>";
           /* while($row = @mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo $row["username"];
                    echo $row["password"];
                    echo $row["name"];
                echo "</tr>";    
            }*/
            
        }
        @mysqli_close($condb);
    ?>
</div>
</body>
</html>

