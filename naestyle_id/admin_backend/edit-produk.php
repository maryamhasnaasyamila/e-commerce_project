<?php 
include_once('header.php');
include_once('navbar.php');
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO pakaian (nama, deskripsi, foto, brand_id, ukuran, warna, stok, harga, tipe_pakaian_id) VALUES (?, ?, ?, ?, ?, ?,?, ?, ?)";
    $st = $dbh->prepare($sql);
    $st->execute([$_POST['nama'], $_POST['deskripsi'], $_POST['foto'], $_POST['brand_id'], $_POST['ukuran'], $_POST['warna'], $_POST['stok'], $_POST['harga'], $_POST['tipe_pakaian_id']]);
    echo "<script>alert('Data Berhasil di tambah')</script>";
    echo '<meta http-equiv="refresh" content="0; url=produk.php">';
}
if (isset($_GET['iddel'])) {
    $sql = "DELETE FROM pakaian WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_GET['iddel']]);
    echo "<script>alert('Data Berhasil di dihapus')</script>";
    echo '<meta http-equiv="refresh" content="0; url=produk.php">';
} 
if (isset($_GET['idedit'])) {
    $sql = "SELECT pakaian.*, tipe_pakaian.tipe, tipe_pakaian.id AS id_tipe, brand.brand FROM pakaian INNER JOIN  tipe_pakaian ON tipe_pakaian.id = pakaian.tipe_pakaian_id INNER JOIN brand ON brand.id = pakaian.brand_id WHERE pakaian.id = ? ";
    $st = $dbh->prepare($sql);
    $st->execute([$_GET['idedit']]);
    $data = $st->fetch();
    
    if (isset($_POST['update'])) {
        $sql = "UPDATE pakaian SET nama= ?, deskripsi= ?, foto= ?, brand_id= ?, ukuran= ?, warna= ?, stok= ?, harga= ?, tipe_pakaian_id= ? WHERE id = ?";
        $st = $dbh->prepare($sql);
        $st->execute([$_POST['nama'], $_POST['deskripsi'], $_POST['foto'], $_POST['brand_id'], $_POST['ukuran'], $_POST['warna'], $_POST['stok'], $_POST['harga'], $_POST['tipe_pakaian_id'], $_POST['id']]);
        echo "<script>alert('Data Berhasil di update')</script>";
        echo '<meta http-equiv="refresh" content="0; url=produk.php">';
    }
}
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">New Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Product Name</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" value="<?php if (isset($_GET['idedit'])) {echo $data['nama'];} ?>" type="text" required="required" class="form-control">
                        <?php 
                         if (isset($_GET['idedit'])) {
                        ?>
                        <input id="id" name="id" value="<?php echo $data['id']; ?>" type="hidden" >
                        <?php } ?>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="deskripsi" class="col-4 col-form-label">Descriptions</label> 
                        <div class="col-8">
                        <input id="deskripsi" name="deskripsi" value="<?php if (isset($_GET['idedit'])) {echo $data['deskripsi'];} ?>" type="text" required="required" class="form-control">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Link Photo of Product</label> 
                        <div class="col-8">
                        <input id="foto" name="foto" value="<?php if (isset($_GET['idedit'])) {echo $data['foto'];} ?>" type="text" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="brand_id" class="col-4 col-form-label">Brand of Product</label> 
                        <div class="col-8">
                        <select id="brand_id" name="brand_id" required="required" class="form-control">
                            
                            <?php 
                            if (isset($_GET['idedit'])) {
                                echo "<option value='$data[brand_id]'>$data[brand]</option>";
                            }else{
                                echo '<option value="Choose One" disable="disable">Choose One</option>';
                            }
                                $sql2 = "SELECT * FROM brand";
                                $st2 = $dbh->prepare($sql2);
                                $st2->execute();
                                $data2 = $st2->fetchAll();
                                foreach ($data2 as $rs2){
                            ?>
                            <option value="<?= $rs2['id'] ?>"><?= $rs2['brand'] ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="ukuran" class="col-4 col-form-label">Available Size</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="ukuranAllSize" name="ukuran" type="radio" class="custom-control-input" required="required" value="All Size" <?php if(isset($_GET['idedit'])) {if ($data['ukuran'] == "All Size") {echo "checked";}} ?>>
                            <label for="ukuranAllSize" class="custom-control-label"> All Size</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="ukuranS" name="ukuran" type="radio" class="custom-control-input" required="required" value="S" <?php if(isset($_GET['idedit'])) {if ($data['ukuran'] == "S") {echo "checked";}} ?>>
                            <label for="ukuranS" class="custom-control-label"> S</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="ukuranM" name="ukuran" type="radio" class="custom-control-input" required="required" value="M" <?php if(isset($_GET['idedit'])) {if ($data['ukuran'] == "M") {echo "checked";}} ?>>
                            <label for="ukuranM" class="custom-control-label"> M</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="ukuranL" name="ukuran" type="radio" class="custom-control-input" required="required" value="L" <?php if(isset($_GET['idedit'])) {if ($data['ukuran'] == "L") {echo "checked";}} ?>>
                            <label for="ukuranL" class="custom-control-label"> L</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input id="ukuranXL" name="ukuran" type="radio" class="custom-control-input" required="required" value="XL" <?php if(isset($_GET['idedit'])) {if ($data['ukuran'] == "XL") {echo "checked";}} ?>>
                            <label for="ukuranXL" class="custom-control-label"> XL</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warna" class="col-4 col-form-label">Available Color</label> 
                        <div class="col-8">
                        <select id="warna" name="warna" required="required" class="form-control">
                            <?php if (isset($_GET['idedit'])) {
                                echo "<option value='$data[warna]'>$data[warna]</option>";
                            }?>
                            <option value="Default as pict">Default as pict</option>
                            <option value="Black">Black</option>
                            <option value="White">White</option>
                            <option value="Gray">Gray</option>
                            <option value="Green">Green</option>
                            <option value="Choco">Choco</option>
                            <option value="Blue">Blue</option>
                            <option value="Purple">Purple</option>
                            <option value="Orange">Orange</option>
                            <option value="Red">Red</option>
                            <option value="Yellow">Yellow</option>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-label">Available Stocks</label> 
                        <div class="col-8">
                        <input id="stok" name="stok" type="number" value="<?php if (isset($_GET['idedit'])) {echo $data['stok'];} ?>" required="required" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="harga" class="col-4 col-form-label">Harga Produk</label> 
                        <div class="col-8">
                        <input id="harga" name="harga" type="number" value="<?php if (isset($_GET['idedit'])) {echo $data['harga'];} ?>" required="required" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="tipe_pakaian_id" class="col-4 col-form-label">Kategori Produk</label> 
                        <div class="col-8">
                        <select id="tipe_pakaian_id" name="tipe_pakaian_id" required="required" class="form-control">
                            
                            <?php 
                            if (isset($_GET['idedit'])) {
                                echo "<option value='$data[id_tipe]'>$data[tipe]</option>";
                            }else{
                                echo '<option value="Choose One" disable="disable">Choose One</option>';
                            }
                                $sql = "SELECT * FROM tipe_pakaian";
                                $st = $dbh->prepare($sql);
                                $st->execute();
                                $data = $st->fetchAll();
                                foreach ($data as $rs){
                            ?>
                            <option value="<?= $rs['id'] ?>"><?= $rs['tipe'] ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="<?php if (isset($_GET['idedit'])) { echo "update"; } else {echo "submit";} ?>" type="submit" class="btn btn-info btn-sm">Save</button>
                        <a href="produk.php" class="btn btn-outline-dark btn-sm">Back</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php') ?>