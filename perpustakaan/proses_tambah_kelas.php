<?php
if ($_POST){
    $nama_kelas=$_POST ['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    $angkatan=$_POST['angkatan'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tampil_kelas.php';</script>";
      } elseif (empty($kelompok)){
        echo "<script>alert('kelompok tidk boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif (empty($angkatan)){
        echo "<script>alert('angkatan tidk boleh kosong');location.href='tampil_kelas.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas,kelompok,angkatan) value ('".$nama_kelas."','".$kelompok."','".$angkatan."')");
        if ($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan kelas');location.href='tampil_kelas.php';</script>";
        

        }
    }
}
?>