<?php 
require_once('dbkoneksi.php');

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO pesanan (tanggal, pakaian_id, quantity, nama_cust, alamat, pay) VALUES (?, ?, ?, ?, ?, ?)";
    $tanggal = date("Y-m-d");
    $st = $dbh->prepare($sql);
    $st->execute([$tanggal, $_POST['pakaian_id'], $_POST['quantity'], $_POST['nama_cust'], $_POST['alamat'], $_POST['pay']]);
    echo "<script>alert('Pembelian Berhasil.')</script>";
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
?>