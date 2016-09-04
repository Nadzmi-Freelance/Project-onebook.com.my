<!DOCTYPE html>
<html>
  <head>
    <!-- metadata -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1" />

    <title>Informasi</title>

    <!-- stylesheets -->
    <link href="../css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/pememnang-cabutan.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <header>
      <h1 class="heading-layout">ONEBOOK</h1>
      <button class="heading-layout" id="btn-menu" onclick="showDropDown()"><img src="../img/header/ic_menu_black.png" /></button><br />
      <nav id="nav-dropdown-content">
        <a href="informasi.html"><h2>INFORMASI</h2></a>
        <a href="produk.html"><h2>PRODUK</h2></a>
        <a href="promosi.html"><h2>PROMOSI TERKINI</h2></a>
        <a href="cabutan.html"><h2>CABUTAN BERTUAH</h2></a>
        <a href="soalan.html"><h2>SOALAN LAZIM</h2></a>
        <a href="hubung.html"><h2>HUBUNGI KAMI</h2></a>
      </nav>
    </header>

    <div id="content"></div>

    <footer>
      <h1>HUBUNGI KAMI</h1>

      <form id="form" action="mailto:onepage2u@gmail.com" method="post">
        <div id="form-input">
          <input type="text" id="form-input-hubung" class="form-hubung" name="nama" placeholder="NAMA" /><br />
          <input type="email" id="form-input-hubung" class="form-hubung" name="emel" placeholder="EMEL" /><br />
          <textarea type="textarea" id="form-input-hubung" class="form-hubung" name="komen" placeholder="KOMEN ANDA"></textarea><br />
        </div>
        <input id="form-submit" type="submit" class="form-hubung" name="submit" value="HANTAR" />
      </form>
    </footer>

    <!-- scripts -->
    <script src="../js/framework/jquery-1.11.3.min.js"></script>
    <script src="../js/framework/bootstrap.min.js"></script>
    <script src="../js/header.js"></script>
  </body>
</html>
