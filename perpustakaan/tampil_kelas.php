<?php include 'navbar.php';?>
    <h3>Data Kelas</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kelompok</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
</thead>
<tbody>
    <?php
    include "koneksi.php";
    $qry_kelas=mysqli_query ($conn,"select * from kelas");
    $no=0;
    while($data_kelas=mysqli_fetch_array($qry_kelas)){
        $no++;?>
        <tr><td><?=$no?></td><td><?=$data_kelas['nama_kelas']?></td> <td><?=$data_kelas['kelompok']?></td> <td><?=$data_kelas['angkatan']?></td>
        <td>        
        <a href="ubah_kelas.php?id_kelas=<?
        =$data_kelas['id_kelas']?>"onclick="return confirm('Apakah anda yakin mengubah data ini?')" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?
        =$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>

<a href="tambah_kelas.php" class="btn btn-primary btn-md rounded-pill"> Add kelas</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
</html>