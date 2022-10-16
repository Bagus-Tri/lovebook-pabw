<?php include 'header.php'?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Cek Login</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Cek Login</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container" data-aos="fade-up">

      <?php
        $un = $_POST['un'];
        $ps = $_POST['ps'];
       
        $akun = array(
          array("un"=>"bagustri", "ps"=>"6502","level"=>"admin"),
          array("un"=>"bagus", "ps"=>"0605","level"=>"user"),
          array("un"=>"tri", "ps"=>"2002","level"=>"user")
        );

        session_start(); 
        $_SESSION["status"]="no";
        foreach($akun as $datum){
        //print_r($datum);
          if($un==$datum['un'] && $ps ==$datum['ps']){
            $_SESSION["status"] = "oke";
            $_SESSION["level"] = $datum['level'];
            echo "Login berhasil: sebagai ".$datum['level'];
            echo "<br><a href=\"produk.php\">Menuju Produk Saya</a>";
            break;
          }
        }
          if($_SESSION["status"] == "no"){
            echo "Gagal login, user name dan password tidak sesuai<br>";
            echo "<a href=\"login.php\">login ulang</a>";
          } 
      ?>

      </div>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php';?>