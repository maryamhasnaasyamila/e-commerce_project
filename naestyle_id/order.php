<?php 
include_once('header.php'); 
include_once('navbar.php'); 

?>
  <!-- ======= Header ======= -->
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Step 1 - Product Checkout</h2>
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
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php 
                $sql = "SELECT pakaian.*, tipe_pakaian.tipe, brand.brand FROM pakaian INNER JOIN  tipe_pakaian ON tipe_pakaian.id = pakaian.tipe_pakaian_id INNER JOIN brand ON brand.id = pakaian.brand_id";
                $st = $dbh->prepare($sql);
                $st->execute();
                $data = $st->fetchAll();
                foreach ($data as $rs){
                ?>
                <div class="swiper-slide">
                  <img src="<?= $rs['foto']; ?>" alt="">
                </div>
                <?php } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          
          <div class="col-lg-5">
            <div class="portfolio-info align-items-center" style="padding-left: 2vw; padding-right: 2vw; padding-top:1vw; padding-bottom:1vw; margin:0vw;">
              <h3>Order Form</h3>
              <form method="POST" action="cart.php">
                <div class="form-group row">
                  <label for="pakaian_id" class="col-4 col-form-label">Product</label>
                  <div class="col-8">
                    <select id="pakaian_id" name="pakaian_id" class="custom-select" required="required">
                      <?php 
                      $sql3 = "SELECT * FROM pakaian";
                      $st3 = $dbh->prepare($sql3);
                      $st3->execute();
                      $data3 = $st3->fetchAll();
                      foreach ($data3 as $rs3){ echo "<option value='$rs3[id]'>$rs3[nama]</option>";}
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="UKURAN" class="col-4 col-form-label">Size</label> 
                  <div class="col-8">
                    <select id="warna" name="warna" class="custom-select" required="required">
                      <option value="All Size">All Size</option>
                    </select>
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="warna" class="col-4 col-form-label">Color</label> 
                  <div class="col-8">
                    <select id="warna" name="warna" class="custom-select" required="required">
                      <option value="Default as pict">Default as pict</option>
                    </select>
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="quantity" class="col-4 col-form-label">QTY</label>
                  <div class="col-8">
                    <div class="input-group">
                      <input id="quantity" name="quantity" min="1" placeholder="Jumlah Produk" type="number"
                        required="required" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="order" type="submit" class="btn btn-primary">Checkout</button>
                  </div>
                </div>
              </form>
            </div>
            <br>
            <div class="container portofolio-details" style="background-color: #e7c3c375; padding:1vw;">
              <strong class="text-center"><i class="bi bi-exclamation-triangle-fill"></i>
                <span> Size and color depend on the stock in the store.</span>
              </strong>
            </div>
          </div>
        </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php 
include_once('footer.php'); 
?>