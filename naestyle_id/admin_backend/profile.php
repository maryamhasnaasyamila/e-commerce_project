<?php 
include_once('header.php');
include_once('navbar.php');
?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Admin Profile</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Admin Profile</li>
    </ol>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center container">
                  <img
                    class="profile-user-img img-circle img-fluid"
                    style="
                      margin-bottom: 10px;
                      border-radius: 90%;
                      width: 45%;
                      border: 5px solid lightgray;
                    "
                    src="assets/img/profile.jpg"
                    alt="My Photo Profile"
                  />
                </div>
                <h3 class="profile-username text-center">
                  Maryam Hasnaa' Syamila
                </h3>
                <p class="text-muted text-center">
                  Teknik Informatika 03 (0110222067)
                </p>
                <ul
                  class="list-group list-group-unbordered mb-4 text-right" style="padding-left:1.5vw; padding-right:1.5vw;"
                >
                  <li class="list-group-item">
                    <a
                      class="float-left"
                      href="https://www.linkedin.com/in/maryam-hasnaa-syamila-673853251/"
                      style="text-decoration: none"
                    >
                      <i class="fa-brands fa-linkedin"></i> LinkedIn
                    </a>
                    Connect me, I'm gonna connect you!
                  </li>
                  <li class="list-group-item">
                    <a
                      class="float-left"
                      href="mailto:hassyamil4@gmail.com"
                      style="text-decoration: none"
                    >
                      <i class="fa-solid fa-envelope"></i> Email
                    </a>
                    I'm open for business and inquiries.
                  </li>
                  <li class="list-group-item">
                    <a
                      class="float-left"
                      href="https://github.com/maryamhasnaasyamila"
                      style="text-decoration: none"
                    >
                      <i class="fa-brands fa-github"></i> GitHub
                    </a>
                    Sharing & learn code together~
                  </li>
                  <li class="list-group-item">
                    <a
                      class="float-left"
                      href="https://www.instagram.com/hasnasya_/"
                      style="text-decoration: none"
                    >
                      <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                    Let's be friend!
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->

            <!-- /.card -->
          </div>
          <div class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong
                  ><i class="fas fa-book mr-1"></i> Education</strong
                >
                <p class="text-muted">
                  S1 Teknik Informatika at STT Terpadu Nurul Fikri
                </p>

                <hr />

                <strong
                  ><i class="fas fa-map-marker-alt mr-1"></i>
                  Location</strong
                >
                <p class="text-muted">Depok, Indonesia</p>

                <hr />

                <strong
                  ><i class="far fa-file-alt mr-1"></i> Motto</strong
                >
                <p class="text-muted">Just do it with Basmallah.</p>

                <hr />

                <strong><i class="fab fa-gratipay"></i> Hobbies</strong>
                <p class="text-muted">
                  Reading books, write a fiction story, watch some movies, kpop
                  fangirling, exploring and challenging myself.
                </p>

                <hr />

                <strong><i class="fas fa-bullseye"></i> Goals</strong>
                <p class="text-muted">
                  Mengejar gelar Cumlaude dalam 3,5 tahun! Magang
                  diperusahaan dan punya sertifikat keahlian yang
                  berdasar pada kemampuan diri.
                </p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</main>
<?php include_once('footer.php') ?>