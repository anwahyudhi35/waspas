<?php
include '../../koneksi.php';


$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$bagian = $_POST['bagian'];
$olah = $_POST['diolah'];
$guna = $_POST['digunakan'];
$khasiat = $_POST['khasiat'];
$resep = $_POST['resep'];


//upload gambar 
$gambarnama = $_FILES['gambar']['name'];


$file_ext = explode('.', $gambarnama);
$flex = strtolower(end($file_ext));

$filenamenew = $nama.".".$flex;
$simpan = '../../gambar/'.$filenamenew;
//







$sql=mysqli_query($dbh,"INSERT INTO tumbuhan_obat (nama_tumbuhan, jenis_tumbuhan, cara_pengolahan, cara_penggunaan, bagian_tumbuhan, khasiat, resep, gambar) VALUES ('$nama', '$jenis', '$olah', '$guna', '$bagian','$khasiat', '$resep', '$filenamenew')");
 
if ($sql) {
    
    move_uploaded_file($_FILES['gambar']['tmp_name'], $simpan);
    echo "<script> document.location='data-tanaman-admin.php' </script> ";
}else {
    echo mysqli_error($dbh);
    
}
?>