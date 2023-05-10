<?php 
include_once('header.php');
include_once('navbar.php');
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product Brands</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Brands</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="create-brand.php" class="btn btn-info btn-sm"><i class="fas fa-plus"></i> Add New Brand</a>
            </div>
            <div class="card-body">
                
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                        $no = 1;
                        $sql = "SELECT * FROM brand";
                        $st = $dbh->prepare($sql);
                        $st->execute();
                        $data = $st->fetchAll();
                        foreach ($data as $rs){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rs['brand'] ?></td>
                            <td>
                                <a href="edit-brand.php?idedit=<?= $rs['id'] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>
                                <a href="edit-brand.php?iddel=<?= $rs['id'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can-arrow-up fa-sm"></i> Delete</a>
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