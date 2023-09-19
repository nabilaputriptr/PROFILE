<?php 
require 'funcion.php';

$k=$_GET["y"];

$array = query("SELECT * FROM lab WHERE ID = $k")[0];


if(isset($_POST["t"])){

    if(ubah($_POST)){
        echo"
        <script>
        alert('data berhasil dimasukkan');
        document.location.href='index.php';
    </script>
    
        ";
    }else{
        echo "ahhihi";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $array["ID"]?>">
            <input type="text" name="PEMESAN" placeholder="pemesan" value="<?php echo $array["PEMESAN"]?>"><br>
            <input type="text" name="PRODI" placeholder="prodi"  value="<?php echo $array["PRODI"]?>"><br>
            <input type="text" name="RUANGLAB" placeholder="ruang lab"  value="<?php echo $array["RUANG LAB"]?>"><br>
            <input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"  value="<?php echo $array["TANGGAL PINJAM"]?>"><br>
            <input type="time" name="JAMMULAI" placeholder="jam mulai" value="<?php echo $array["JAM MULAI"]?>"><br>
            <input type="time" name="JAMSELESAI" placeholder="jam selesai" value="<?php echo $array["JAM SELESAI"]?>"><br>
            <input type="text" name="KETERANGAN" placeholder="keterangan" value="<?php echo $array["KETERANGAN"]?>"><br>
            <input type="text" name="PENANGGUNGJAWAB" placeholder="penanggung jawab"  value="<?php echo $array["PENANGGUNG JAWAB"]?>"><br>
            <button type="submit" name="t">Kirim!!</button>
        </form>
    </div>
</body>
</html>