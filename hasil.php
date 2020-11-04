<?php 
include "koneksi.php";
$sakit = $_POST['sakit'];
$guna = $_POST['guna'];
$bagian = $_POST['bagian'];
$jenis = $_POST['jenis'];
$olah = $_POST['olah'];

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="asset/index.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #82b74b">
                <div class="sidebar-header" style="background-color: #82b74b"> 
                    <a href="index.php"><center>
                    <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>    
                    </center>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="data_tanaman.php">
                            <center>
                            Data Tanaman Obat    
                            </center>
                        </a>
                    </li>
                    <li>
                      <a href="rekomendasi.php" aria-expanded="false">
                            <center>
                            Rekomendasi Tanaman Obat    
                            </center>
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
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                
                <center>
                <div class="panel panel-heading">
                    <h2>Hasil Rekomendasi Penyakit <?php echo $sakit ?></h2>
                </div>
                <button class = "btn btn-success" onclick="sortTable(7)" >Urutkan</button>
                <div class="panel-body">

                    <table class="table table-responsive table-hover table-bordered" id="myTable">
                       <thead>
                           <tr>
                               <th>NO</th>
                               <th>Nama Tumbuhan</th>
                               <th>Nama Latin</th>
                               <th>Jenis Tumbuhan</th>
                               <th>Bagian Tumbuhan</th>
                               <th>Cara Pengolahan</th>
                               <th>Cara Penggunaan</th>
                               <th>Khasiat</th>
                               <th>Qi</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php
                           $no  = 1;
                           
                           foreach ($_POST['guna'] as $gunawan) {
                            
                            foreach ($_POST['olah'] as $olahan) {
                                foreach ($_POST['jenis'] as $jenius) {
                                    foreach ($_POST['bagian'] as $bagio) {
                            
                            $sql = "select tumbuhan_obat.* from tumbuhan_obat where khasiat = '$sakit' AND cara_penggunaan = '$gunawan' AND cara_pengolahan = '$olahan' AND jenis_tumbuhan = '$jenius' AND bagian_tumbuhan = '$bagio' ORDER BY qi DESC";

                            foreach ($dbh->query($sql) as $data):
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><a href="wiki_tumbuhan.php?pohon=<?php echo $data['id_tumbuhan'] ?>">
                                <?php echo $data['nama_tumbuhan'] ?>    
                                </a></td>
                                <td><i><?php echo $data['latin'] ?></i></td>
                                <td><?php echo $data['jenis_tumbuhan'] ?></td>
                                <td><?php
                                if ($data['bagian_tumbuhan'] == 'KulitBatang') {
                                     echo "Kulit Batang";
                                 } else
                                    echo $data['bagian_tumbuhan'] ?></td>
                                <td><?php echo $data['cara_pengolahan'] ?></td>
                                <td><?php echo $data['cara_penggunaan'] ?></td>
                                <td><?php echo $data['khasiat'] ?></td>
                                <td><?php echo $data['qi'] ?></td>
                            </tr>
                            <?php
                          
                        
                    $no++;    
                        endforeach;
                         }
                        }
                    }
                    
                    }
                

                         ?>
                       </tbody>
                   </table>
                   
                <br><br><br>
                </center>
                </div>

                </div>

            
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
        <script>
         function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
         if (Number(x.innerHTML) > Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
      } else if (dir == "desc") {
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i+1].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
         </script>
    </body>
</html>
