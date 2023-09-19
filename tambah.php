<?php 
require "funcion.php";

if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='index.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
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
            <input type="text" name="PEMESAN" placeholder="pemesan"><br>
            <input type="text" name="PRODI" placeholder="prodi"><br>
            <input type="text" name="RUANGLAB" placeholder="ruang lab"><br>
            <input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"><br>
            <input type="time" name="JAMMULAI" placeholder="jam mulai"><br>
            <input type="time" name="JAMSELESAI" placeholder="jam selesai"><br>
            <input type="text" name="KETERANGAN" placeholder="keterangan"><br>
            <input type="text" name="PENANGGUNGJAWAB" placeholder="penanggung jawab"><br>
            <button type="submit" name="submit">Kirim!!</button>
        </form>
    </div>
</body>
</html>