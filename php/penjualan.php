<?php include 'header.php'?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profil</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container">
        <div class="container-xl px-4" data-aos="fade-up">
          <!-- Account page navigation-->
          <nav class="nav nav-borders shadow-none p-3 bg-light rounded">
              <a class="nav-link" href="profile.html" style="color:#CE1212">Biodata Diri</a>
              <a class="nav-link" href="#" style="color:#CE1212">Daftar Alamat</a>
              <a class="nav-link" href="produk.php" style="color:#CE1212">Produk Saya</a>
              <a class="nav-link  ms-0 btn btn-danger rounded-pill" href="penjualan.php" style="color:white">Data Penjualan</a>
          </nav>
          <hr class="mt-0 mb-4">
          <div class="row">
              <div class="col-xl-4">
                  <!-- Profile picture card-->
                  <div class="card mb-4 mb-xl-0 shadow-sm">
                      <div class="card-header">Foto Profil</div>
                      <div class="card-body text-center">
                          <!-- Profile picture image-->
                          <div class="card rounded-circle">
                            <img class="img-account-profile rounded-circle" src="../assets/img/chefs/Bagus2.png" alt="">
                          </div>
                          
                          <!-- Profile picture help block-->
                          <div class="small font-italic text-muted mt-3 mb-2">JPG atau PNG kurang dari 5 MB</div>
                          <!-- Profile picture upload button-->
                          <button class="btn btn-outline-danger rounded-pill" type="button">Pilih Foto</button>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8">
                  <!-- Account details card-->
                  <div class="card mb-4 shadow-sm">
                    <div class="card-header">Import Data</div>
                    <div class="card-body">
                          <form>
                              <!-- Form Group (username)-->
                              <div class="mb-3">
                              <a href="import.php" class="shadow ms-2 btn bi bi-file-earmark-excel-fill" style="
                                font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                                padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:white; color:#CE1212"> Import Excel</a>
                                  <hr>
                              </div>
                              <!-- Form Row-->
                        </form>
                    </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">Fusion Chart</div>
                      <div class="card-body">
                          <form>
                              <!-- Form Group (username)-->
                              <div class="mb-3">
                              <div data-aos="fade-up">
                              <h4 class="mb-4">Pendapatan</h4>
                              <div id="chartPenjualan" class="table table-responsive d-flex justify-content-center"></div>
                              </div>
                              <div data-aos="fade-up">
                              <h4 class="mb-4 mt-5">kefavoritan Pembeli</h4>
                              <div id="chartKefavoritan" class="table table-responsive d-flex justify-content-center"></div>
                              </div>
                                  <hr>
                              </div>
                              <!-- Form Row-->
                    </div>
                    </div>
                </div>
                </div>
                
          </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php'; ?>