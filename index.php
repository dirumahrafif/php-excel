<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Data Propinsi</title>
</head>
<body>  
    <div style="margin:auto; width:900px;text-align:center">
    <div style="background-color: #dedede;padding:10px;margin:15px;">
        sumber data: https://dev.farizdotid.com/api/daerahindonesia/provinsi
    </div>
    <form action="" method="POST">
        <input 
            type="submit" 
            name="html" 
            value="Tampilkan HTML Data Propinsi"
            style="font-size:15px;padding:10px"
        />
        <input 
            type="submit" 
            name="xlshtml" 
            value="Download XLS Data Propinsi (ringkas)"
            style="font-size:15px;padding:10px"
        />
        <input 
            type="submit" 
            name="xls" 
            value="Download XLS Data Propinsi (PHPSpreadSheet)"
            style="font-size:15x;padding:10px"
        />
    </form> 
    <?php 
    if(isset($_POST['html'])){
        include("html.php");
    }
    if(isset($_POST['xlshtml'])){
        header("location:xlshtml.php");
    }
    if(isset($_POST['xls'])){
        header("location:xls.php");
    }
    ?>
    </div>
</body>
</html>