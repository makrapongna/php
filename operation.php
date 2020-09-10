<html>
<head>
<title>เทส</title>
<meta charset = "UTF-8">
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
<?php $chk_a = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "";
      $chk_b = isset($_REQUEST["b"]) ? $_REQUEST["b"] : "";
      $chk_op = isset($_REQUEST["operation"]) ? $_REQUEST["operation"] : "";
      $chk_click = isset($_REQUEST["login1"]) ? $_REQUEST["login1"] : "";
?>
  <center>
        <div>
        <form action="operation.php" name="form1" method="POST">
            A<input type= "text" name="a" id="aa" value ="<?php echo $chk_a;?>" >
            <select name="operation" id="operation">
            <option value="">เลือก</option>
            <option value="+" <?php if($chk_op=="+") echo "selected"?>>+</option>
            <option value="-" <?php if($chk_op=="-") echo "selected"?>>-</option>
            <option value="x" <?php if($chk_op=="x") echo "selected"?>>x</option>
            <option value="/" <?php if($chk_op=="/") echo "selected"?>>/</option>
            </select>
            B<input type= "text" name="b" id="bb" value ="<?php echo $chk_b;?>" >=
            <input type= "text" name="c" id="cc" value ="<?php
              if($chk_a==""&&$chk_b!=""){echo "ช่องAว่าง";}
              else if($chk_b==""&&$chk_a!=""){echo "ช่องBว่าง";}
              else if($chk_a==""&&$chk_b==""){echo "ช่องAและBว่าง";}
              else{ 
                if($chk_op=="+"){echo $chk_a+$chk_b;}
                else if($chk_op=="-"){echo $chk_a-$chk_b;}      
                else if($chk_op=="x"){echo $chk_a*$chk_b;}
                else if($chk_op=="/"){echo $chk_a/$chk_b;}
                else { echo "โปรดเลือกตัวดำเนินการ";}
              }
              ?>">
            <input type= "submit" name="login1" id="login1" value="คำนวณ">
              
        </form>
        </div>
        </center>
</body>
</html>