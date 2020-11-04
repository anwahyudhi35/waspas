<?php 
include "../../koneksi.php";
include "rumus.php";

session_start();
 
?>


<!DOCTYPE html>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #82b74b">
                <div class="sidebar-header" style="background-color: #82b74b">
                    <a href="index-admin.php">
                    <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="../tanaman/data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
                        </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4><?php echo date('Y') ?></h4>
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
                    <h2>Halaman Hasil Perhitungan</h2>
                </div>
                </center>
                <div class="panel-body">
                    <h3><center>AHP</center></h3>
                    <center>    
                    <a href="ubah-hitung.php?hitung=<?php echo $totalan['id'] ?>" class="btn btn-warning"> 
                    <i class="glyphicon glyphicon-pencil"></i>
                    <span>Ubah Hitungan</span>
                    </a>
                    </center>
                    <br>
                            <hr>
                            <h3>Matriks</h3>
                            <hr>
                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Kriteria</td>
                                    <td>Jenis Tumbuhan</td>
                                    <td>Cara Pengolahan</td>
                                    <td>Cara Pemanfaatan</td>
                                    <td>Bagian Tumbuhan</td>
                                </thead>
                                <tbody>
                                        <tr>
                                            <?php 

                                            
                                             ?>
                                            <td>Jenis Tumbuhan</td>
                                            <td><?php 
                                                echo $totalan['a11'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a12'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a13'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a14'];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pengolahan</td>
                                            <td><?php 
                                                
                                                echo $totalan['a21'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a22'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a23'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a24'];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pemanfaatan</td>
                                            <td><?php 
                                                    
                                                echo $totalan['a31'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a32'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a33'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a34'];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Bagian Tumbuhan</td>
                                            <td><?php 
                                               
                                                echo $totalan['a41'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a42'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a43'];
                                             ?></td>
                                            <td><?php 
                                                
                                                echo $totalan['a44'];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Jumlah</td>
                                            <td><?php 
                                            
                                            echo $tahp[0]; ?></td>
                                            <td><?php 
                                            
                                            echo $tahp[1]; ?></td>
                                            <td><?php 
                                            
                                            echo $tahp[2]; ?></td>
                                            <td><?php 
                                            
                                            echo $tahp[3]; ?></td>
                                        </tr>
                                    </tbody>
                            </table>
                            
                            </table>
                                <h3>Matriks Normalisasi</h3>
                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td></td>
                                            <td>C1</td>
                                            <td>C2</td>
                                            <td>C3</td>
                                            <td>C4</td>
                                            <td>Jumlah Baris</td>
                                            <td>Prioritas Eigein</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                    <td>C1</td>
                                                    <td>
                                                        <?php $cm1[0]=$ahp1[0]/$tahp[0];
                                                        echo $cm1[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm1[1]=$ahp1[1]/$tahp[1];
                                                        echo $cm1[1]; ?></td>
                                                    <td><?php $cm1[2]=$ahp1[2]/$tahp[2];
                                                        echo $cm1[2]; ?></td>
                                                    <td><?php $cm1[3]=$ahp1[3]/$tahp[3];
                                                        echo $cm1[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[0]=array_sum($cm1);
                                                    echo $baris[0];
                                                     ?></td>
                                                    <td><?php $eigen[0]=$baris[0]/4;
                                                        echo $eigen[0]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                  

                                                <td>C2</td>
<td>    
                                                        <?php $cm2[0]=$ahp2[0]/$tahp[0];
                                                        echo $cm2[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm2[1]=$ahp2[1]/$tahp[1];
                                                        echo $cm2[1]; ?></td>
                                                    <td><?php $cm2[2]=$ahp2[2]/$tahp[2];
                                                        echo $cm2[2]; ?></td>
                                                    <td><?php $cm2[3]=$ahp2[3]/$tahp[3];
                                                        echo $cm2[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[1]=array_sum($cm2);
                                                    echo $baris[1];
                                                     ?></td>
                                                    <td><?php $eigen[1]=$baris[1]/4;
                                                        echo $eigen[1]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C3</td>
                                                    <td>
                                                        <?php $cm3[0]=$ahp3[0]/$tahp[0];
                                                        echo $cm3[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm3[1]=$ahp3[1]/$tahp[1];
                                                        echo $cm3[1]; ?></td>
                                                    <td><?php $cm3[2]=$ahp3[2]/$tahp[2];
                                                        echo $cm3[2]; ?></td>
                                                    <td><?php $cm3[3]=$ahp3[3]/$tahp[3];
                                                        echo $cm3[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[2]=array_sum($cm3);
                                                    echo $baris[2];
                                                     ?></td>
                                                    <td><?php $eigen[2]=$baris[2]/4;
                                                        echo $eigen[2]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C4</td>
                                                   <td>
                                                        <?php $cm4[0]=$ahp4[0]/$tahp[0];
                                                        echo $cm4[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm4[1]=$ahp4[1]/$tahp[1];
                                                        echo $cm4[1]; ?></td>
                                                    <td><?php $cm4[2]=$ahp4[2]/$tahp[2];
                                                        echo $cm4[2]; ?></td>
                                                    <td><?php $cm4[3]=$ahp4[3]/$tahp[3];
                                                        echo $cm4[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[3]=array_sum($cm4);
                                                    echo $baris[3];
                                                     ?></td>
                                                    <td><?php $eigen[3]=$baris[3]/4;
                                                        echo $eigen[3]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                    <td><?php 
                                                    $tm[0] = $cm1[0]+$cm2[0]+$cm3[0]+$cm4[0];
                                                    echo $tm[0]?></td>
                                                    <td><?php 
                                                    $tm[1] = $cm1[1]+$cm2[1]+$cm3[1]+$cm4[1];
                                                    echo $tm[1]?></td>
                                                    <td><?php 
                                                    $tm[2] = $cm1[2]+$cm2[2]+$cm3[2]+$cm4[2];
                                                    echo $tm[2]?></td>
                                                    <td><?php 
                                                    $tm[3] = $cm1[3]+$cm2[3]+$cm3[3]+$cm4[3];
                                                    echo $tm[3]?></td>
                                                    <td><?php 
                                                    $tm[4]=$baris[0]+$baris[1]+$baris[2]+$baris[3];
                                                    echo $tm[4];
                                                     ?></td>
                                                    <td><?php 
                                                    $tm[5]=$eigen[0]+$eigen[1]+$eigen[2]+$eigen[3];
                                                     echo $tm[5];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td>CI</td>
                                            <td>CR</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php 
                                                    $ci = (($tahp[0]*$eigen[0])+($tahp[1]*$eigen[1])+($tahp[2]*$eigen[2])+($tahp[3]*$eigen[3]));
                                                    echo $ci;
                                                     ?>
                                                </td>
                                                
                                                <td rowspan="2"><?php 
                                                $cr = (($ci-4)/3)/0.9;
                                                echo $cr;
                                                 ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo ($ci-4)/3; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            
                            <h3>Bobot Sub Kriteria</h3>
                            <hr>
                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Jenis Tumbuhan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pohon</td>
                                        <td><?php echo $sub[0]; ?></td>
                                        <td><?php  echo $sub[0]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Perdu</td>
                                        <td><?php echo $sub[1]; ?></td>
                                        <td><?php  echo $sub[1]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Liana</td>
                                        <td><?php echo $sub[2]; ?></td>
                                        <td><?php  echo $sub[2]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Semak</td>
                                        <td><?php echo $sub[3]; ?></td>
                                        <td><?php  echo $sub[3]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Herba</td>
                                        <td><?php echo $sub[4]; ?></td>
                                        <td><?php  echo $sub[4]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Cara Pengolahan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ditumbuk</td>
                                        <td><?php echo $sub[5]; ?></td>
                                        <td><?php  echo $sub[5]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Direbus</td>
                                        <td><?php echo $sub[6]; ?></td>
                                        <td><?php  echo $sub[6]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Langsung</td>
                                        <td><?php echo $sub[7]; ?></td>
                                        <td><?php  echo $sub[7]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Diparut</td>
                                        <td><?php echo $sub[8]; ?></td>
                                        <td><?php  echo $sub[8]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dibakar</td>
                                        <td><?php echo $sub[9]; ?></td>
                                        <td><?php  echo $sub[9]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Cara Penggunaan</td>
                                        <td>Nilai</td>
                                        <td>Jumlah</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dimakan</td>
                                            <td><?php echo $sub[10]; ?></td>
                                            <td><?php  echo $sub[10]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ditempel</td>
                                            <td><?php echo $sub[11]; ?></td>
                                            <td><?php  echo $sub[11]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Diminum</td>
                                            <td><?php echo $sub[12]; ?></td>
                                            <td><?php  echo $sub[12]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dioleskan</td>
                                            <td><?php echo $sub[13]; ?></td>
                                            <td><?php  echo $sub[13]/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Saat Mandi</td>
                                            <td><?php echo $sub[14]; ?></td>
                                            <td><?php  echo $sub[14]/$total ?></td>
                                        </tr>
                                    </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Bagian yang Digunakan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Daun</td>
                                        <td><?php echo $sub[15]; ?></td>
                                        <td><?php echo $sub[15]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Akar</td>
                                        <td><?php echo $sub[16]; ?></td>
                                        <td><?php echo $sub[16]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Buah</td>
                                        <td><?php echo $sub[17]; ?></td>
                                        <td><?php echo $sub[17]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Rimpang</td>
                                        <td><?php echo $sub[18]; ?></td>
                                        <td><?php echo $sub[18]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Batang</td>
                                        <td><?php echo $sub[19]; ?></td>
                                        <td><?php echo $sub[19]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Getah</td>
                                        <td><?php echo $sub[20]; ?></td>
                                        <td><?php echo $sub[20]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bunga</td>
                                        <td><?php echo $sub[21]; ?></td>
                                        <td><?php echo $sub[21]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kulit Batang</td>
                                        <td><?php echo $sub[22]; ?></td>
                                        <td><?php echo $sub[22]/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Biji</td>
                                        <td><?php echo $sub[23]; ?></td>
                                        <td><?php echo $sub[23]/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    <div class="panel-heading">
                    </div>
                    <h3><center>WASPAS</center></h3>
                    <hr>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#Bisul">Bisul</a></li>
                            <li><a data-toggle="tab" href="#Luar">Luka Luar</a></li>
                            <li><a data-toggle="tab" href="#Panu">Panu</a></li>
                            <li><a data-toggle="tab" href="#Jerawat">Jerawat</a></li>
                            <li><a data-toggle="tab" href="#Eksim">Eksim</a></li>
                            <li><a data-toggle="tab" href="#Bakar">Luka Bakar</a></li>
                            <li><a data-toggle="tab" href="#Borok">Borok</a></li>
                            <li><a data-toggle="tab" href="#Biduran">Biduran</a></li>
                            <li><a data-toggle="tab" href="#Kurap">Kurap</a></li>
                            <li><a data-toggle="tab" href="#Kudis">Kudis</a></li>
                            <li><a data-toggle="tab" href="#Gatal">Gatal</a></li>
                            <li><a data-toggle="tab" href="#Kutil">Kutil</a></li>
                            <li><a data-toggle="tab" href="#Ketombe">Ketombe</a></li>
                            <li><a data-toggle="tab" href="#Cacar">Cacar</a></li>
                            <li><a data-toggle="tab" href="#Koreng">Bekas Luka</a></li>

                        </ul>
                        <br><br>
                        <div class="tab-content">
                            <!-- Bisul -->
                            <div id="Bisul" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bisul'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }
                                                 elseif($datas['bagian_tumbuhan'] == "Biji") { //biji udah
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bisul'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                 elseif($datas['bagian_tumbuhan'] == "Biji") { //biji udah
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bisul'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Luka Luar -->
                            <div id="Luar" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Luar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }
                                                 elseif($datas['bagian_tumbuhan'] == "Biji") { //biji udah
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Luar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji done
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Luar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Panu -->
                            <div id="Panu" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Panu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //bji udah
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Panu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Panu'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Jerawat -->
                            <div id="Jerawat" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Jerawat'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Jerawat'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Jerawat'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Eksim -->
                            <div id="Eksim" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Eksim'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Eksim'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") { //biji
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Eksim'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Luka Bakar -->
                            <div id="Bakar" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }
                                                 else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Borok -->
                            <div id="Borok" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Borok'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Borok'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Borok'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Biduran -->
                            <div id="Biduran" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Biduran -->
                            <div id="Biduran" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Biduran'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Kurap -->
                            <div id="Kurap" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kurap'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kurap'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kurap'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Kudis -->
                            <div id="Kudis" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kudis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kudis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kudis'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Gatal -->
                            <div id="Gatal" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Gatal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Gatal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Gatal'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Kutil -->
                            <div id="Kutil" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kutil'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kutil'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Kutil'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Bakar -->
                            <div id="Bakar" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Luka Bakar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Ketombe -->
                            <div id="Ketombe" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ketombe'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k1[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ketombe'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ketombe'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cacar -->
                            <div id="Cacar" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacar'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Bekas Luka -->
                            <div id="Koreng" class="tab-pane">
                                <h3>Matriks Normalisasi</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        $k1 = array();
                                        $k2 = array();
                                        $k3 = array();
                                        $k4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bekas Luka'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $k1[$no] = $sub[5]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $k1[$no] = $sub[6]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $k1[$no] = $sub[7]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $k1[$no] = $sub[8]/$total;
                                                echo $k1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $k1[$no] = $sub[9]/$total;
                                                echo $k1[$no];
                                                }else{
                                                    $k1[$no] = 0;
                                                    echo $k1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                     $k2[$no] = $sub[10]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $k2[$no] = $sub[11]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $k2[$no] = $sub[12]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $k2[$no] = $sub[13]/$total;
                                                echo $k2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $k2[$no] = $sub[14]/$total;
                                                     echo $k2[$no];
                                                 }else{
                                                    $k2[$no] = 0;
                                                echo $k2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $k3[$no] = $sub[15]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                     
                                                     $k3[$no] = $sub[16]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     
                                                     $k3[$no] = $sub[17]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     
                                                     $k3[$no] = $sub[18]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     
                                                     $k3[$no] = $sub[19]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    
                                                     $k3[$no] = $sub[20]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     
                                                     $k3[$no] = $sub[21]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                     
                                                     $k3[$no] = $sub[22]/$total;
                                                    echo $k3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                     
                                                     $k3[$no] = $sub[23]/$total;
                                                    echo $k3[$no];
                                                 }else{
                                                     $k3[$no] = 0;
                                                     echo $k3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $k4[$no] = $sub[0]/$total;
                                                echo $k4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $k4[$no] = $sub[1]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $k4[$no] = $sub[2]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $k4[$no] = $sub[3]/$total;
                                                echo $k4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $k4[$no] = $sub[4]/$total;
                                                echo $k4[$no];
                                                }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                                }?></td>

                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>

                                <h3>Normalisasi Rij</h3>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $rij1 = array();
                                        $rij2 = array();
                                        $rij3 = array();
                                        $rij4 = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bekas Luka'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>

                                         <tr>
                                             <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td>
                                                <?php 
                                                if($datas['cara_pengolahan'] == "Ditumbuk") {
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Direbus") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Langsung") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Diparut") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }elseif($datas['cara_pengolahan'] == "Dibakar") {
                                                    
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }else{
                                                    $rij1[$no] = $k1[$no]/max($k1);
                                                    echo $rij1[$no];
                                                }
                                                 ?> 
                                                
                                             </td>
                                             <td>
                                                 <?php 
                                                 if($datas['cara_penggunaan']== "Dimakan") {
                                                     
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Ditempel") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Diminum") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Dioleskan") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }elseif($datas['cara_penggunaan']== "Mandi") {
                                                     
                                                     $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }else{
                                                    $rij2[$no] = $k2[$no]/max($k2);
                                                    echo $rij2[$no];
                                                 }

                                                  ?>
                                             </td>
                                             <td>
                                                 <?php 

                                                 if($datas['bagian_tumbuhan'] == "Daun") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Akar") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Buah") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Rimpang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Batang") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Getah") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Bunga") {
                                                     $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Kulit Batang") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }elseif($datas['bagian_tumbuhan'] == "Biji") {
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }else{
                                                    $rij3[$no] = $k3[$no]/max($k3);
                                                    echo $rij3[$no];
                                                 }
                                                  ?>
                                             </td>
                                             <td><?php
                                             if($datas['jenis_tumbuhan'] == "Pohon") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif($datas['jenis_tumbuhan'] == "Perdu"){
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Liana") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Semak") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }elseif ($datas['jenis_tumbuhan'] == "Herba") {
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }else{
                                                $rij4[$no] = $k4[$no]/max($k4);
                                                    echo $rij4[$no];
                                                }?></td>
                                         </tr>
                                         <?php 
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                                <h3>Nilai Preferensi (Qi)</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama Tumbuhan</td>
                                        <td>Nilai Qi</td>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $no = 0;
                                        $qi = array();
                                         
                                        $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Bekas Luka'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                         ?>
                                         <tr>
                                           <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                             <td><?php 
                                                $qi[$no]=(0.5*(($rij1[$no]*$eigen[1])+($rij2[$no]*$eigen[2])+($rij3[$no]*$eigen[3])+($rij4[$no]*$eigen[0])))+(0.5*(pow($rij1[$no], $eigen[1])+pow($rij2[$no],$eigen[2])+pow($rij3[$no],$eigen[3])+pow($rij4[$no],$eigen[0])));
                                                echo $qi[$no];
                                                ?> 
                                             </td>
                                         </tr>
                                         <?php
                                         $ranking = "update tumbuhan_obat SET qi = '$qi[$no]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                                            if ($dbh->query($ranking) === TRUE) {
                                               }  
                                         $no++;
                                     endforeach;
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                       

                        </div>

                </div>
        </div>
<script>
function ubahBobot() {
  var x = document.getElementById("bobot");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
    </body>
    </html>
