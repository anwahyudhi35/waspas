<?php 
include "../../koneksi.php";
session_start();
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../asset/index.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style=" background-color: #82b74b">
                <div class="sidebar-header" style="background-color: #82b74b">
                    <a href="../index-admin.php">
                    <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                   <li>
                        <a href="data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="../perhitungan/hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
                        </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4>  <?php echo date('Y') ?></h4>
                    </center>
                    <hr>  
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <div class="dropdown"> 
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama']; ?>
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><?php $id = $_SESSION['id_amin'] ?>
                                        <a href="../edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Tambah Data Tanaman</h2>
                </div>
              </center>
                <!-- 
                - disini pake perulangan dari database, tapi databasenya harus diubah agar bisa manggil dari database
                = dan juga formnya akan nambahkan gambar yang diperlukan jika perlu
                - gambar diedit diluar biar ukurannya seragam
                -->
                  
                <div class="panel panel-body">
                  <form class="form" action="menanam.php" method="POST" enctype="multipart/form-data">
                  	<div class="form-group">
                  		<label>Nama Tumbuhan</label>
                  		<input type="text" name="nama" class="form-control">
                  	</div>
                  	<div class="form-group">
                      <label for="sel1">Jenis Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="jenis">
                         <option value="Pohon">Pohon</option>
                         <option value="Liana">Liana</option>
                         <option value="Herba">Herba</option>
                         <option value="Perdu">Perdu</option>
                         <option value="Semak">Semak</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Bagian Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="bagian">
                         <option value="Daun">Daun</option>
                         <option value="Akar">Akar</option>
                         <option value="Buah">Buah</option>
                         <option value="Rimpang">Rimpang</option>
                         <option value="Batang">Batang</option>
                         <option value="Getah">Getah</option>
                         <option value="Bunga">Bunga</option>
                         <option value="Kulit Batang">Kulit Batang</option>
                        <option value="Biji">Biji</option>
                      </select>
                    </div>
                  	<div class="form-group">
                      <label for="sel1">Cara Pengolahan:</label>
                      <select class="form-control" id="sel1" name="diolah">
                        <option value="Langsung">Langsung</option>
                        <option value="Ditumbuk">Ditumbuk</option>
                        <option value="Diparut">Diparut</option>
                        <option value="Dibakar">Dibakar</option>
                        <option value="Direbus">Direbus</option>
                      </select>
                    </div>
                  	<div class="form-group">
                     <label for="sel1">Cara Penggunaan:</label>
                      <select class="form-control" id="sel1" name="digunakan">
                        <option value="Diminum">Diminum</option>
                        <option value="Dimakan">Dimakan</option>
                        <option value="Ditempel">Ditempel</option>
                        <option value="Dioleskan">Dioleskan</option>
                        <option value="Mandi">Saat Mandi</option>
                      </select>
                    </div>
                  	<div class="form-group">
                      <label for="sel1">Penyakit:</label>
                      <select class="form-control" id="sel1" name="khasiat">
                        
                        <option value="Bisul">Bisul</option>

                        <option value="Luka Luar">Luka Luar</option>

                        <option value="Panu">Panu</option>

                        <option value="Jerawat">Jerawat</option>

                        <option value="Eksim">Eksim</option>

                        <option value="Luka Bakar">Luka Bakar</option>

                        <option value="Borok">Borok</option>

                        <option value="Biduran">Biduran</option>

                        <option value="Kurap">Kurap</option>

                        <option value="Kudis">Kudis</option>
                        
                        <option value="Gatal">Gatal</option>

                        <option value="Kutil">Kutil</option>

                        <option value="Cacar">Cacar</option>

                        <option value="Ketombe">Ketombe</option>

                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Latin</label>
                      <input type="text" name="latin" cols="60" rows="10" class="form-control" required=""> 
                    </div>
                    <div class="form-group">
                      <label>Resep</label>
                      <textarea name="resep" cols="60" rows="10" class="form-control"></textarea>  
                    </div>
                    <div class="form-group">
                      <label> gambar </label>
                      <input type="file" name="gambar" class="form-control">
                    </div>
                  	<div class="form-group">
							<input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
							<input type="submit" required name="nanam" value = "Tambah" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan Penambahan data Tumbuhan?');">
				</div>
                  </form>
        	
                  
                

                </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
