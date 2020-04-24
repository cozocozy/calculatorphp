<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <style>
        h2{
            font-family: sans-serif;
            color: paleturquoise;
        }
        body{
            background-image: radial-gradient(blue,aqua,blue);
        }
        .operator{
            font-size: 15px;
            padding: 8px 15px;
        }
        table{
            background-color: paleturquoise
        }
        tr{
            text-align: center;
            font-size: 18px;
            font-family:sans-serif;
        }
        

    </style>
</head>
<body>
    <h2 align="center">CALCULATOR</h2>
    <form action="" name="form1" method="POST">
    <table cellpadding="10" border="1" width="300" align="center" height="400">
    <tr>
    <td>Masukan angka pertama
    <input type="number" name="num1" step="0.00001" style="width:250px; height:30px;"></td>
    </tr>
    <tr>
    <td>Masukan angka kedua
    <input type="number" name="num2" step="0.00001" style="width:250px; height:30px;"></td>
    </tr>
    <tr align="center">
    <td>
    <input type="submit" class="operator" name="tambah" value="+" >
    
    <input type="submit" class="operator" name="kurang" value="-">
    
    <input type="submit" class="operator" name="kali" value="*">
    
    <input type="submit" class="operator" name="bagi" value="/">
    </tr>

    <?php 
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $htambah=$num1+$num2;
    $hkurang=$num1-$num2;
    $hkali=$num1*$num2;
    $hbagi=$num1/$num2;
    if(isset($_POST['tambah'])){
        echo "<tr align=center><td>".$htambah."</td></tr>";
    }
    if(isset($_POST['kurang'])){
        echo "<tr align=center><td>".$hkurang."</td></tr>";
    }
    if(isset($_POST['kali'])){
        echo "<tr align=center><td>".$hkali."</td></tr>";
    }
    if(isset($_POST['bagi'])){
        echo "<tr align=center><td>".$hbagi."</td></tr>";   
    }
?>
</table>
</form>
</body>
</html>