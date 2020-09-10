<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {"lengthMenu": [[3, 6, 10, -1], [10, 25, 50, "All"]],
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
                
        ]
    } );
} );
    </script>
</head>
<body>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </thead>
        <tbody>
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
        
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td><h1>" . $row['id'] . "</h1></td>";
                            echo "<td><h2>" . $row['username'] . "</h2></td>";
                            echo "<td><h3>" . $row['name'] . "</h3></td>";
                            
                        echo "</tr>";
                    }
           /* while($row = @mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo $row["username"];
                    echo $row["password"];
                    echo $row["name"];
                echo "</tr>";    
            }*/
            
        }@mysqli_close($condb);?>
            
        </tbody>
    </table>
</body>
</html>