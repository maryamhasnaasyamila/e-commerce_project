<?php 
include_once('header.php');
include_once('navbar.php');
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO tipe_pakaian (tipe) VALUES (?)";
    $st = $dbh->prepare($sql);
    $st->execute([$_POST['tipe']]);
    echo "<script>alert('Data Berhasil di tambah')</script>";
    echo '<meta http-equiv="refresh" content="0; url=kategori.php">';
}
if (isset($_GET['iddel'])) {
    $sql = "DELETE FROM tipe_pakaian WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_GET['iddel']]);
    echo "<script>alert('Data Berhasil di dihapus')</script>";
    echo '<meta http-equiv="refresh" content="0; url=kategori.php">';
} 
if (isset($_GET['idedit'])) {
    $sql = "SELECT * FROM tipe_pakaian WHERE id= ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_GET['idedit']]);
    $data = $st->fetch();
    
    if (isset($_POST['update'])) {
        $sql = "UPDATE tipe_pakaian SET tipe= ? WHERE id = ?";
        $st = $dbh->prepare($sql);
        $st->execute([$_POST['tipe'], $_POST['id']]);
        echo "<script>alert('Data Berhasil di update')</script>";
        echo '<meta http-equiv="refresh" content="0; url=kategori.php">';
    }
}
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">New Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New Category</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row">
                        <label for="tipe" class="col-4 col-form-label">Category Name</label> 
                        <div class="col-8">
                        <input id="tipe" name="tipe" value="<?php if (isset($_GET['idedit'])) {echo $data['tipe'];} ?>" type="text" required="required" class="form-control">
                        <?php 
                         if (isset($_GET['idedit'])) {
                        ?>
                        <input id="id" name="id" value="<?php echo $data['id']; ?>" type="hidden" >
                        <?php } ?>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="<?php if (isset($_GET['idedit'])) { echo "update"; } else {echo "submit";} ?>" type="submit" class="btn btn-info btn-sm">Save</button>
                        <a href="kategori.php" class="btn btn-outline-dark btn-sm">Back</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php') ?>