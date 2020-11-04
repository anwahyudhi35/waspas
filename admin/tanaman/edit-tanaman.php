<?php 
include "../../koneksi.php";
session_start();
$id = $_GET['pohon'];
$query=mysqli_query($dbh,"select * from tumbuhan_obat where id_tumbuhan='$id'");
$data=mysqli_fetch_array($query);


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
            <nav id="sidebar" style="background-color: #82b74b">
                <div class="sidebar-header" style="background-color: #82b74b">
                    <a href="../index-admin.php">
                   <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components" >
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
                            <p></p><div class="dropdown"> <!-- warna dropdown menu diubah-->
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
                    <h2>Ubah Data Tanaman</h2>
                </div>
              </center>
                <!-- 
                - disini pake perulangan dari database, tapi databasenya harus diubah agar bisa manggil dari database
                = dan juga formnya akan nambahkan gambar yang diperlukan jika perlu
                - gambar diedit diluar biar ukurannya seragam
                -->
                  
                <div class="panel panel-body">
                 <form class="form" action="merawat.php?pohon=<?php echo $data['id_tumbuhan'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                       <label>Nama Tumbuhan</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_tumbuhan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="sel1">Jenis Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="jenis">
                         <option value="Pohon"<?php if($data['jenis_tumbuhan'] == 'Pohon') { ?> selected="selected"<?php } ?>>Pohon</option>
                         <option value="Liana"<?php if($data['jenis_tumbuhan'] == 'Liana') { ?> selected="selected"<?php } ?>>Liana</option>
                         <option value="Herba"<?php if($data['jenis_tumbuhan'] == 'Herba') { ?> selected="selected"<?php } ?>>Herba</option>
                         <option value="Perdu"<?php if($data['jenis_tumbuhan'] == 'Perdu') { ?> selected="selected"<?php } ?>>Perdu</option>
                         <option value="Semak"<?php if($data['jenis_tumbuhan'] == 'Semak') { ?> selected="selected"<?php } ?>>Semak</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label for="sel1">Bagian Tumbuhan:</label>
                      <select class="form-control" id="sel1" name="bagian">
                         <option value="Daun"<?php if($data['bagian_tumbuhan'] == 'Daun') { ?> selected="selected"<?php } ?>>Daun</option>
                         <option value="Akar"<?php if($data['bagian_tumbuhan'] == 'Akar') { ?> selected="selected"<?php } ?>>Akar</option>
                         <option value="Buah"<?php if($data['bagian_tumbuhan'] == 'Buah') { ?> selected="selected"<?php } ?>>Buah</option>
                         <option value="Rimpang"<?php if($data['bagian_tumbuhan'] == 'Rimpang') { ?> selected="selected"<?php } ?>>Rimpang</option>
                         <option value="Batang"<?php if($data['bagian_tumbuhan'] == 'Batang') { ?> selected="selected"<?php } ?>>Batang</option>
                         <option value="Getah"<?php if($data['bagian_tumbuhan'] == 'Getah') { ?> selected="selected"<?php } ?>>Getah</option>
                         <option value="Bunga"<?php if($data['bagian_tumbuhan'] == 'Bunga') { ?> selected="selected"<?php } ?>>Bunga</option>
                         <option value="KulitBatang"<?php if($data['bagian_tumbuhan'] == 'KulitBatang') { ?> selected="selected"<?php } ?>>Kulit Batang</option>
                         <option value="Biji" <?php if($data['bagian_tumbuhan'] == 'Biji') { ?> selected="selected"<?php } ?>>Biji</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Cara Pengolahan:</label>
                      <select class="form-control" id="sel1" name="diolah">
                        <option value="Langsung"<?php if($data['cara_pengolahan'] == 'Langsung') { ?> selected="selected"<?php } ?>>Langsung</option>
                        <option value="Ditumbuk"<?php if($data['cara_pengolahan'] == 'Ditumbuk') { ?> selected="selected"<?php } ?>>Ditumbuk</option>
                        <option value="Diparut"<?php if($data['cara_pengolahan'] == 'Diparut') { ?> selected="selected"<?php } ?>>Diparut</option>
                        <option value="Dibakar"<?php if($data['cara_pengolahan'] == 'Dibakar') { ?> selected="selected"<?php } ?>>Dibakar</option>
                        <option value="Direbus"<?php if($data['cara_pengolahan'] == 'Direbus') { ?> selected="selected"<?php } ?>>Direbus</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Cara Penggunaan:</label>
                      <select class="form-control" id="sel1" name="digunakan">
                        <option value="Diminum"<?php if($data['cara_penggunaan'] == 'Diminum') { ?> selected="selected"<?php } ?>>Diminum</option>
                        <option value="Dimakan"<?php if($data['cara_penggunaan'] == 'Dimakan') { ?> selected="selected"<?php } ?>>Dimakan</option>
                        <option value="Ditempel"<?php if($data['cara_penggunaan'] == 'Ditempel') { ?> selected="selected"<?php } ?>>Ditempel</option>
                        <option value="Dioleskan"<?php if($data['cara_penggunaan'] == 'Dioleskan') { ?> selected="selected"<?php } ?>>Dioleskan</option>
                        <option value="Mandi"<?php if($data['cara_penggunaan'] == 'Mandi') { ?> selected="selected"<?php } ?>>Saat Mandi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Penyakit:</label>
                      <select class="form-control" id="sel1" name="khasiat">
                        
                        <option value="Bisul"<?php if($data['khasiat'] == 'Bisul') { ?> selected="selected"<?php } ?>>Bisul</option>

                        <option value="Luka Luar"<?php if($data['khasiat'] == 'Luka Luar') { ?> selected="selected"<?php } ?>>Luka Luar</option>

                        <option value="Panu"<?php if($data['khasiat'] == 'Panu') { ?> selected="selected"<?php } ?>>Panu</option>

                        <option value="Jerawat"<?php if($data['khasiat'] == 'Jerawat') { ?> selected="selected"<?php } ?>>Jerawat</option>

                        <option value="Eksim"<?php if($data['khasiat'] == 'Eksim') { ?> selected="selected"<?php } ?>>Eksim</option>

                        <option value="Luka Bakar"<?php if($data['khasiat'] == 'Luka Bakar') { ?> selected="selected"<?php } ?>>Luka Bakar</option>

                        <option value="Borok"<?php if($data['khasiat'] == 'Borok') { ?> selected="selected"<?php } ?>>Borok</option>

                        <option value="Biduran"<?php if($data['khasiat'] == 'Biduran') { ?> selected="selected"<?php } ?>>Biduran</option>

                        <option value="Kurap"<?php if($data['khasiat'] == 'Kurap') { ?> selected="selected"<?php } ?>>Kurap</option>

                        <option value="Kudis"<?php if($data['khasiat'] == 'Kudis') { ?> selected="selected"<?php } ?>>Kudis</option>
                        
                        <option value="Gatal"<?php if($data['khasiat'] == 'Gatal') { ?> selected="selected"<?php } ?>>Gatal</option>

                        <option value="Kutil"<?php if($data['khasiat'] == 'Kutil') { ?> selected="selected"<?php } ?>>Kutil</option>

                        <option value="Cacar"<?php if($data['khasiat'] == 'Cacar') { ?> selected="selected"<?php } ?>>Cacar</option>

                        <option value="Ketombe"<?php if($data['khasiat'] == 'Ketombe') { ?> selected="selected"<?php } ?>>Ketombe</option>

                        <option value="Bekas Luka"<?php if($data['khasiat'] == 'Bekas Luka') { ?> selected="selected"<?php } ?>>Bekas Luka</option>

                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Latin</label>
                      <input type="text" name="latin" cols="60" rows="10" class="form-control" value="<?php echo $data['latin']; ?>">   
                    </div>
                    <div class="form-group">
                      <label>Resep</label>
                      <textarea name="resep" cols="60" rows="10" class="form-control"> <?php echo $data['resep']; ?></textarea>  
                    </div>
                    <div class="form-group">
                      <label> gambar </label>
                      <input type="file" name="gambar" class="form-control" value="<?php echo $data['gambar']?>">
                    </div>
                    <div class="form-group">
              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan Penambahan data Tumbuhan?');">
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
