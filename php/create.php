<?php include 'header.php'; ?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Data</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profil</li>
            <li>Produk Saya</li>
            <li>Tambah Data</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
<div class="container">
    <?php 
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $alamat=input($_POST["alamat"]);
        $kategori=input($_POST["kategori_fav"]);
        

        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO user (nama,jenis_kelamin,alamat,kategori_fav) values
		('$nama','$jenis_kelamin','$alamat','$kategori')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:produk.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <h2>Tambah Data</h2>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

    </div>
    <div class="form-group">
        <label>Jenis Kelamin (Pria/Wanita) :</label>
        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukan Jenis Kelamin (Pria/Wanita)" required/>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
    </div>
    <div class="form-group">
        <label>Kategori Favorit:</label>
        <input type="text" name="kategori_fav" class="form-control" placeholder="Masukan Kategori Favorit Anda" required/>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include 'footer.php'; ?>