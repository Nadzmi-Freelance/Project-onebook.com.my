<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- metadata -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1" />

    <title>Informasi</title>

    <!-- stylesheets -->
    <link href="../css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/pemenang-cabutan.css" rel="stylesheet" type="text/css" />

    <style>
      <?php include "../css/pemenang-cabutan.css"; ?>
    </style>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif] -->
  </head>

  <body>
    <header>
      <a href="../index.html"><h1 class="heading-layout">ONEBOOK</h1></a>
      <button class="heading-layout" id="btn-menu" onclick="showDropDown()"><img src="../img/header/ic_menu_black.png" /></button><br />
      <nav id="nav-dropdown-content">
        <a href="../html/informasi.html"><h2>INFORMASI</h2></a>
        <a href="../html/produk.html"><h2>PRODUK</h2></a>
        <a href="../html/promosi.html"><h2>PROMOSI TERKINI</h2></a>
        <a href="../html/cabutan.html"><h2>CABUTAN BERTUAH</h2></a>
        <a href="../html/soalan.html"><h2>SOALAN LAZIM</h2></a>
        <a href="../html/hubung.html"><h2>HUBUNGI KAMI</h2></a>
      </nav>
    </header>

    <div id="content">
      <?php
      if(isset($_POST["tarikh"])) {
        $tarikh = $_POST["tarikh"]; // get value from html form
        $tarikhSplit = explode("-", $tarikh); // split full tarikh into 'bulan' & 'tahun'

        // initialize each variables
        $bulan = $tarikhSplit[0];
        $tahun = $tarikhSplit[1];
      ?>
      <div id="content-header">
        <video controls="true" preload="auto"></video>
      </div>
      <?php
        // get data from server
        $sqlCabutan = "SELECT * FROM cabutan WHERE MONTH(cabutanDate) LIKE '$bulan' AND YEAR(cabutanDate) LIKE '$tahun'";
        $queryCabutan = mysqli_query($conn, $sqlCabutan) or die(mysql_error());

        if(mysqli_num_rows($queryCabutan) > 0) {
      ?>
      <div id="pemenang">
        <?php
            while($row = mysqli_fetch_array($queryCabutan)) {
              // initialize cabutan data
              $cabutanData = array(
                "cabutanName" => $row["cabutanName"],
                "cabutanDate" => $row["cabutanDate"],
                "cabutanImage" => $row["cabutanImage"]
              );
        ?>
        <div class="pemenang-list">
          <img src="data:image/jpeg;base64, <?php echo base64_encode($cabutanData["cabutanImage"]); ?>" alt="pemenang" />
          <h3><?php echo $cabutanData["cabutanName"]; ?></h3>
        </div>
        <?php
            }
          }
        }
        ?>
      </div>

    <footer>
      <h1>HUBUNGI KAMI</h1>

      <form id="form" action="../php/hubung.php" method="post">
        <div id="form-input">
          <input type="text" id="form-input-hubung" class="form-hubung" name="nama" placeholder="NAMA" /><br />
          <input type="email" id="form-input-hubung" class="form-hubung" name="emel" placeholder="EMEL" /><br />
          <textarea type="textarea" id="form-input-hubung" class="form-hubung" name="komen" placeholder="KOMEN ANDA"></textarea><br />
        </div>
        <input id="form-submit" type="submit" class="form-hubung" name="submit" value="HANTAR" />
      </form>
      <h5 id="copyright">&copy; Onebook Resepi 2016</h5>
    </footer>

    <!-- scripts -->
    <script src="../js/framework/jquery-1.11.3.min.js"></script>
    <script src="../js/framework/bootstrap.min.js"></script>
    <script src="../js/header.js"></script>
  </body>
</html>
