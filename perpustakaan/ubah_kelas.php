<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <?php 

    include "koneksi.php";

    $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");

    $dt_siswa=mysqli_fetch_array($qry_get_siswa);

    ?>

    <h3>Tambah Kelas</h3>

    
    <form action="proses_tambah_kelas.php" method="post">

        <input type="hidden" name="id_kelas" value=

        
  "<?=$dt_kelas['id_kelas']?>">

  <form action="proses_tambah_kelas.php" method="post">
        nama Kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok :
        <input type="text" name="nama_kelas" value="" class="form-control">
        angkatan :
        <input type="text" name="nama_kelas" value="" class="form-control">