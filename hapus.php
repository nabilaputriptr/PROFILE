<?php 
require "funcion.php";

$t=$_GET["x"];

if(hapus($t)){
    echo"
    <script>
    alert('data berhasil dimasukkan');
    document.location.href='index.php';
</script>
    ";
}
?>