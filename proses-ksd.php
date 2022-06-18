<?php
include "conn.php";

if (isset($_POST['save'])) {

    $tanggal = $_POST['tgl'];
    $kendala = $_POST['kendala'];
    $modul = $_POST['modul'];
    $lokasi = $_POST['lokasi'];
    $note = $_POST['note'];
    $status = $_POST['status'];

    $sql = "INSERT INTO emr_kotaksaran (tanggal,kendala,modul,layanan,note,status) VALUES 
    ('$tanggal','$kendala','$modul','$lokasi','$note','$status' )";

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        //redirect ke halaman index
        echo "<script> alert(
            'Sip,Kesimpen!',
            'Mantap Sekali',
            'success') </script>";
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
