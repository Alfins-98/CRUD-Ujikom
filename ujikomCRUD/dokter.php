<html>
<head>
    <title>Halaman Data Dokter - Alfi Nurshidqi</title>
</head>
<body>
    <center>
    <h2>Data Dokter - Alfi Nurshidqi</h2>
    <br/>
    <table border="1">        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>No.Telpon</th>
            <th>Alamat</th>
            <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * from tbdokter");
    while($d = mysqli_fetch_array($data)){
    
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['no_telp']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="edit_dokter.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a href="hapus_dokter.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <br/>
    <a href="tambah_dokter.php">Tambah Data Dokter</a><br/>
    <a href="home.php">HOME</a>
    </center>

</body>
</html>