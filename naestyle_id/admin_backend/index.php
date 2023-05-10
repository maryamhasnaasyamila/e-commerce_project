<?php 
include_once('header.php');
include_once('navbar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid px-4">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <h1 class="mt-4">Welcome,</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h4><i class="fas fa-info"></i> Note:</h4>
            This is my 3rd project for Web Programming Course. The topic this time is "Clothing E-Commerce" by implementing Database, Bootstrap, adn PHP. <br>
            Hope you guys are enjoy and like it~
          </div> <br>
          <div class="callout callout-info">
            <h4><i class="fas fa-info"></i> Philosophy: "naestyle"</h4>
            ; taken from the word "내" (korean) and "style" (english) which means "my fashion style" or "my style".
          </div>
        <br>

          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <a href="profile.php" class="href"><i class="fas fa-globe"></i> Get to know me!</a>
                  <small class="float-right">Date: 04/05/2023</small>
                </h4>
              </div>
              <!-- /.col -->
            </div> <br> <br>

          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('footer.php') ?>