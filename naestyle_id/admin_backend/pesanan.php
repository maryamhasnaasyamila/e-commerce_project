<?php 
include_once('header.php');
include_once('navbar.php');

if (isset($_GET['iddel'])) {
    $sql = "DELETE FROM pesanan WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_GET['iddel']]);
    echo "<script>alert('Data Berhasil di dihapus')</script>";
    echo '<meta http-equiv="refresh" content="0; url=pesanan.php">';
} 
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Order Recaps</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Order Recaps</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Product Id</th>
                            <th>QTY</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Product Id</th>
                            <th>QTY</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                        $no = 1;
                        $sql = "SELECT pesanan.*, pakaian.nama, pakaian.harga FROM pesanan INNER JOIN pakaian ON pakaian.id = pesanan.pakaian_id";
                        $st = $dbh->prepare($sql);
                        $st->execute();
                        $data = $st->fetchAll();
                        foreach ($data as $rs){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rs['nama_cust'] ?></td>
                            <td><?= $rs['alamat'] ?></td>
                            <td><?= $rs['nama'] ?></td>
                            <td><?= $rs['quantity'] ?></td>
                            <td>Rp. <?= number_format($rs['harga'], 0, ',', '.');?></td>
                            <td>Rp. <?= number_format($rs['harga'] * $rs['quantity'], 0, ',', '.');?></td>
                            <td>
                                <a href="?iddel=<?= $rs['id'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can-arrow-up fa-sm"></i> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php') ?>