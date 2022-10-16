<?php include 'header.php';?>
<div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Data</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profil</li>
            <li>Produk Saya</li>
            <li>Update Data</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
    <div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    error_reporting(0);

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="select * from user where id=$id";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
        $nama=input($_POST["nama"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $alamat=input($_POST["alamat"]);
        $kategori=input($_POST["kategori_fav"]);

        //Query update data pada tabel anggota
        $sql="update user set
			    nama='$nama',
                jenis_kelamin='$jenis_kelamin',
			    alamat='$alamat',
                kategori_fav='$kategori',
			    where id=$id";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:produk.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Nama" required/>

    </div>
    <div class="form-group">
        <label>Jenis Kelamin (Pria/Wanita):</label>
        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Masukan Jenis Kelamin" required/>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required><?php echo $data['alamat']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Kategori Favorit:</label>
        <input type="text" name="kategori_fav" class="form-control" value="<?php echo $data['kategori_fav']; ?>" placeholder="Masukan Kategori Favorit" required/>
    </div>

    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include 'footer.php';?>