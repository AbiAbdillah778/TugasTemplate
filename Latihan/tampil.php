<?php include('koneksi.php') ?>

<body>
    <h1>FORM BUKU TAMU</h1>
    <h2>SMK IGASAR PINDAD BANDUNG</h1>
    <hr size=5 color=black>
    <table border=1>
        <tr>
            <td>NO</td>
            <td>Nama Tamu</td>
            <td>Alamat Tamu</td>
            <td>No Telp</td>
            <td>Pesan</td>
            <td>Tanggal</td>
        </tr>
<?php
    $sql="SELECT * from Buku_tamu order by tanggal_bertamu desc";
        $hasil=mysqli_query ($koneksi,$sql);
        $totaldata =mysqli_num_rows($hasil);

        $no=1;

        while($row=mysqli_fetch_assoc($hasil)){ ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_tamu']; ?></td>
                <td><?php echo $row['alamat_tamu']; ?></td>
                <td><?php echo $row['notelp_tamu']; ?></td>
                <td><?php echo $row['pesan_tamu']; ?></td>
                <td><?php echo $row['tanggal_bertamu']; ?></td>
            </tr>
            <?php $no++;
        }
?>
    </table>
</body>