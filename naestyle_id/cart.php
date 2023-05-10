<?php 
 include_once('header.php');
 include_once('navbar.php');
 if(isset($_POST['order'])){
    $sql = "SELECT pakaian.*, tipe_pakaian.tipe, tipe_pakaian.id AS id_tipe, brand.brand FROM pakaian INNER JOIN  tipe_pakaian ON tipe_pakaian.id = pakaian.tipe_pakaian_id INNER JOIN brand ON brand.id = pakaian.brand_id WHERE pakaian.id = ? ";
    $st = $dbh->prepare($sql);
    $st->execute([$_POST['pakaian_id']]);
    $data = $st->fetch();
?>

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Step 2 - Billing Address Form</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Order</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-7">
            <div class="portfolio-info">
              <table class="table table-striped">
                  <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>QTY</th>
                    <th>Subtotal</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['ukuran'];?></td>
                    <td><?= $data['warna'];?></td>
                    <td><?= $_POST['quantity'];?></td>
                    <td>Rp. <?= number_format($data['harga'] * $_POST['quantity'], 0, ',', '.');?></td>
                  </tr>
              </table>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3>Personal Information</h3>
                <form method="POST" action="proses.php">
                  <div class="form-group row">
                    <label for="nama_cust" class="col-4 col-form-label">Full Name</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-user-circle"></i>
                          </div>
                        </div> 
                        <input id="nama_cust" name="nama_cust" placeholder="Type here.." type="text" required="required" class="form-control">
                        <input type="hidden" name="pakaian_id" value="<?= $_POST['pakaian_id'];?>">
                        <input type="hidden" name="quantity" value="<?= $_POST['quantity'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Address</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                          </div>
                        </div> 
                        <input id="alamat" name="alamat" placeholder="Type here.." type="text" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pay" class="col-4 col-form-label">Payment</label> 
                    <div class="col-8">
                      <select id="pay" name="pay" class="custom-select" required="required">
                        <option value="Choose One" disabled="disabled">Choose One</option>
                        <option value="Vintage Flannel Shirt">COD</option>
                        <option value="Choco Long Shirt">Minimarket</option>
                        <option value="Sky Cropped Top">Transfer Bank</option>
                        <option value="Black T-Shirt">QRIS</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Order Now</button>
                    </div>
                  </div>
                </form>
                <br>
              <div class="container" style="background-color: #e7c3c375; padding:1vw;">
                <strong class="text-center"><i class="bi bi-exclamation-triangle-fill"></i><span>  Pastikan semua data yang diisi sudah benar.</span></strong>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php } include_once('footer.php') ?>