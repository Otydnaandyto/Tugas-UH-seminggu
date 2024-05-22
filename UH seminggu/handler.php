<?php
    include "koneksi.php";

    if (isset($_POST['pengeluaran'])) {
        $tanggal = $_POST['Tanggal'];
        $deskripsi = $_POST['Deskripsi'];
        $pengeluaran = $_POST['Pengeluaran'];

        $insert = $koneksi->query("INSERT INTO pengeluaran (Tanggal, Deskripsi, Pengeluaran) VALUES ('$tanggal', '$deskripsi', '$pengeluaran')");

        if($insert){
            header ("Location: DataPengeluaran.php");
        }
    }
?>