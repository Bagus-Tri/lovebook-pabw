<?php include 'header.php';?>
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
              <a class="nav-link" href="#" style="color:#CE1212">Data Penjualan</a>
          </nav>
          <?php
            include('koneksi.php');
            require 'vendor/autoload.php';
            error_reporting(0);

            use PhpOffice\PhpSpreadsheet\Spreadsheet;
            use PhpOffice\PhpSpreadsheet\Reader\Csv;
            use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

            if (isset($_POST['import'])) {
                $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            if (isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {

                $arr_file = explode('.', $_FILES['berkas_excel']['name']);
                $extension = end($arr_file);

            if ('csv' == $extension) {
              $reader = new vendor\PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new vendor\PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            for ($i = 1; $i < count($sheetData); $i++) {
                $nama     = $sheetData[$i]['1'];
                $jenis_kelamin    = $sheetData[$i]['2'];
                $alamat     = $sheetData[$i]['3'];
                $kategori = $sheetData[$i]['4'];
            mysqli_query($kon, "insert into user (nama,jenis_kelamin,alamat,kategori_fav) values
                        ('$nama','$jenis_kelamin','$alamat','$kategori')");
        }
        // function goBack(){
        //     header("Location:../myproduct.php");
        // }
        // @goBack();
        header('Location: produk.php');
        echo "<div class='alert alert-success'> Data Berhasil diupdate.</div>";
    }
}
?>
 <h3 style="color:#CE1212">Import Dari Excel</h3>
            <p class="small text-muted">Import data buku dari file excel anda</p>
            <br>
            <form method="post" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label for="exampleInputFile">File Upload</label>
                    <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
                    <label class="small text-muted"><i>* .xlsx atau .csv</i></label>
                </div>
                <div class="section-header mb-4">
                    <input type="submit" class="btn shadow-" value="Import" name="import" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block;
                    padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white" />
                    <a href="../myproduct.php" class="shadow ms-2 btn" style="
                        font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:white; color:#CE1212">Batal</a>
                </div>
<?php include 'footer.php';?>