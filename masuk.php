<?php
include"konek.php";

if (isset($_POST['input'])){

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$des=$_POST['deskripsi'];
$foto=$_POST['foto'];
$harga=$_POST['harga'];

$sql="INSERT INTO topping (nama, deskripsi, harga, foto) values ('$nama','$des','$harga','$foto')";
$mysqli->query($sql);
}
?>