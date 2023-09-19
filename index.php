<?php 
 require "funcion.php";
 $database = query('SELECT * FROM lab');
 
if(isset($_POST["keyword"])){
    $database=cari($_POST["keyword"]);
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
    <h1><a href="tambah.php">Tambah Data</a></h1>
    <form action="" method="post">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari!!</button>
    </form>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>AKSI</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>KETERANGAN</th>
                    <th>PENANGGUNG JAWAB</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><a href="ubah.php?y=<?php echo $dts["ID"]?>">Ubah |</a> <a href="hapus.php?x=<?php echo $dts["ID"]?>"> Hapus</a></td>
                <td><?php echo $dts["PEMESAN"] ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
                <td><?php echo $dts["KETERANGAN"] ?></td>
                <td><?php echo $dts["PENANGGUNG JAWAB"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>