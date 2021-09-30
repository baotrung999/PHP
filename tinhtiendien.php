<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tiền Điện</title>

    <style type="text/css">

        table{
            margin-left: 500px;
            background: PeachPuff;
            border: 0 solid yellow;
        }

        thead{           
            font-style: italic;
            background: Gold;    
        }

        td {
            color: blue;
        }

        h2{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #B22222;
            font-size: large;
        }
    </style>
</head>


<body>
    <?php 
        $tenchuho="";
        
        if(isset($_POST['tenchuho']))  
            $tenchuho=trim($_POST['tenchuho']); 
        
        if(isset($_POST['chisocu']))  
            $chisocu=trim($_POST['chisocu']); 
        else $chisocu=0;

        if(isset($_POST['chisocu']))  
            $chisomoi=trim($_POST['chisomoi']); 
        else $chisomoi=0;

        if(isset($_POST['dongia']))  
            $dongia=trim($_POST['dongia']); 
        else $dongia=20000;

        if(isset($_POST['tinh']))

            if (is_string($tenchuho) && is_numeric($chisocu) && is_numeric($chisomoi) && is_numeric($dongia))  

                $tienthanhtoan=($chisomoi - $chisocu) * $dongia;

            else {
                
                echo "<font color='red'>Vui lòng nhập vào đúng thông tin</font>"; 
                
                $tienthanhtoan="";
            }
        else $tienthanhtoan=0;

    ?>

<form name="Tính Tiền Điện" align='left' action="tinhtiendien.php" method="post">
    <table>
        <thead> 
            <th colspan="3" align="center" ><h2>THANH TOÁN TIỀN ĐIỆN</h2></th>
        </thead>
        <TR>
            <td>Tên chủ hộ:</td>
            <td><input type="text" name="tenchuho" value="<?php  echo $tenchuho;?> "/></td>
        </TR>
        <TR>
            <td>Chỉ số cũ:</td>
            <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td>
            <td>(Kw)</td>
        </TR>
        <TR>
            <td>Chỉ số mới:</td>
            <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td>
            <td>(Kw)</td>
        </TR>
        <TR>
            <td>Đơn Giá:</td>
            <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/></td>
            <td>(VND)</td>
        </TR>
        <TR>
            <td>Số Tiền Thanh Toán:</td>
            <td><input type="text" name="tienthanhtoan" disabled="disabled" value="<?php  echo $tienthanhtoan;?> "/></td>
            <td>(VND)</td>
        </TR>
        
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Tính" name="tinh" /></td>
        </tr>
    </table>
</form>

</body>
</html>