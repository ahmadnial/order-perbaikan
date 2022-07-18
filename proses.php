<?php
include "conn.php";

if (isset($_POST['save'])) {

    $tanggal = $_POST['tgl'];
    $layanan = $_POST['layanan'];
    $nm_brg = $_POST['nm_brg'];
    $jenis = $_POST['jenis_tipe'];
    $kerusakan = $_POST['jenis_kerusakan'];
    $ket = $_POST['keterangan'];
    $pelapor = $_POST['pelapor'];
    $status = $_POST['status'];
    $result = $_POST['result'];

    $ketTanggal = '*Tanggal : ';
    $ketLayanan = '*Layanan : ';
    $ketNmBrg = '*Nama Barang : ';
    $ketKerusakan = '*Kerusakan : ';
    $ketKet = '*Keterangan : ';
    $ketPelapor = '*Pelapor : ';

    // $text = $_POST[''];

    $sql = "INSERT INTO order_perbaikan VALUES ('$tanggal','$layanan','$nm_brg','$jenis','$kerusakan','$ket','$pelapor','$status','$result')";

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        //redirect ke halaman index
        echo "<script> alert(
            'Sip,Kesimpen!',
            'Mantap Sekali',
            'success') </script>";
        $apiToken = "5355839999:AAEBaeF-MOoF8ExnZJ1dcXJviVBdGxiTM0g";
        $data = [
            'chat_id' => '539860841',
            'text' => 'Laporan Kerusakan,Bos! Detail Laporan :' . PHP_EOL
                . $ketTanggal . $tanggal . PHP_EOL
                . $ketLayanan . $layanan . PHP_EOL
                . $ketNmBrg . $nm_brg . PHP_EOL
                . $ketKerusakan . $kerusakan . PHP_EOL
                . $ketKet . $ket . PHP_EOL
                . $ketPelapor . $pelapor,
            'parse_mode' => 'html'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
