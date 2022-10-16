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
              <a class="nav-link ms-0 btn btn-danger rounded-pill" href="produk.php" style="color:white">Produk Saya</a>
              <a class="nav-link" href="penjualan.php" style="color:#CE1212">Data Penjualan</a>
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
                      <div class="card-header">Tabel user</div>
                      <div class="card-body">
                          <form>
                              <!-- Form Group (username)-->
                              <div class="mb-3">
                                  <h5>Detail User</h5>
                                  <hr>
                              </div>
                              <!-- Form Row-->
                                
                            <?php
                            //Cek apakah ada nilai dari method GET dengan nama id
                            if (isset($_GET['id'])) {
                                $id=htmlspecialchars($_GET["id"]);
                                $sql="delete from user where id='$id' ";
                                $hasil=mysqli_query($kon,$sql);
                             //Kondisi apakah berhasil atau tidak
                                if ($hasil) {
                                    header("Location:produk.php");
                                    error_reporting(0);

                                }
                                else {
                                    echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

                                }
                            }
                            ?>
                            <table class="table table-bordered table-hover table-responsive">
                                <br>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kategori Favorit</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <?php include "koneksi.php";
                                $sql="select * from user order by id asc";

                                $hasil=mysqli_query($kon,$sql);
                                $no=0;
                                while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo $data["jenis_kelamin"];   ?></td>
                                    <td><?php echo $data["alamat"];   ?></td>
                                    <td><?php echo $data["kategori_fav"];   ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-secondary" role="button">Update</a>
                                        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                                    </td>
                                 </tr>
                                 </tbody>
                                 <?php
                                    }
                                ?>
                            </table>
                            <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>

                            </div>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php'; ?>