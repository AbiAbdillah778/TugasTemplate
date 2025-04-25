<?php 
include 'koneksi.php';
echo "<table border=1>";
$nama_tamu=$_POST ['nama'];
$alamat_tamu=$_POST ['alamat'];
$notelp_tamu=$_POST ['telp'];
$pesan_tamu=$_POST ['pesan'];

echo "<tr><td>Nama :</td><td>$nama_tamu</td></tr>$nama_tamu";
echo "<tr><td>Alamat</td><td>$alamat_tamu</td></tr>$alamat_tamu";
echo "<tr><td>No.Telp</td><td>$notelp_tamu</td></tr>$notelp_tamu";
echo "<tr><td>Pesan</td><td>$pesan_tamu</td></tr>$pesan_tamu";

if (($nama_tamu!="") && ($alamat_tamu!="") && ($notelp_tamu!="") && ($pesan_tamu!=""))
{
    $sql="insert into Buku_Tamu(nama_tamu, alamat_tamu, notelp_tamu, pesan_tamu, tanggal_bertamu)
    values ('$nama_tamu', '$alamat_tamu', '$notelp_tamu', '$pesan_tamu', now())";
    $hasil= mysqli_query($koneksidb,$sql);
    if ($hasil){
        echo "<tr><td colspan=2> Data Telah Disimpan!";
    }else{
        echo "<tr><td colspan=2> Data Gagal Disimpan!";
    }
}else{
    echo "<tr><td colspan=2> Data Masih Kosong!";
}
?>
