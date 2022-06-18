<?php include 'template/header.php';

include "proses.php"; ?>

<header class="container bg-dark mt-2 text-center shadow-lg p-2 mb-2 bg-body rounded">

    <h1>PELAPORAN PERBAIKAN BARANG RS NUR ROHMAH</h1>

</header>

<div class="container">
    <div class="card" style="width: auto;">
        <div class="row">
            <div class="card-body">
                <div class="col-lg col-sm">
                    <form method="POST">
                        <h5 for="" class="bg-fuchsia col text-white text-center shadow-sm p-2 bg-body rounded">Form Pelaporan</h5>
                        <div class="f-group">
                            <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                            <label for="">Tanggal</label>
                            <input type="date" id="" name="tgl" placeholder="" class="form-control tgl_now" required readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label">Unit / Ins. /Bagian</label>
                            <select class="custom-select" name="layanan" required>
                                <option selected>--Choose--</option>
                                <option value="IGD">IGD</option>
                                <option value="Radiologi">Radiologi</option>
                                <option value="Laboratorium">Laboratorium</option>
                                <option value="RJ Penyakit Dalam">RJ Penyakit Dalam</option>
                                <option value="RJ Syaraf">RJ Syaraf</option>
                                <option value="RJ Bedah">RJ Bedah</option>
                                <option value="RJ Anak">RJ Anak</option>
                                <option value="RJ Poli Umum">RJ Poli Umum</option>
                                <option value="RJ Obsgyn">RJ Obsgyn</option>
                                <option value="Rekam Medis">Rekam Medis</option>
                                <option value="Gizi">Gizi</option>
                                <option value="Hemodialisa">Hemodialisa</option>

                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Nama Barang</label>
                            <textarea class="form-control" name="nm_brg" id="" rows="3" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Nama Barang"></textarea>
                        </div>
                        <!-- <div class="f-group">
                            <label for="">Modul / Menu di EMR</label>
                            <input type="text" class="form-control" name="modul" required="Silahkan lengkapi dulu!">
                        </div> -->
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Jenis/Tipe </label>
                            <textarea class="form-control" name="jenis_tipe" id="" rows="2" placeholder="Tuliskan Jenis / Tipe Barang / Deskripsi"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Jenis Kerusakan</label>
                            <textarea class="form-control" name="jenis_kerusakan" id="" rows="4" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Jenis Kerusakan"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="" rows="3" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Keterangan"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Pelapor</label>
                            <input type="text" class="form-control" name="pelapor" placeholder="Tuliskan Nama Anda">
                        </div>
                        <!-- <input type="hidden" class="form-control" name="status" value="Menunggu Respon"> -->

                        <!-- <input type="hidden" class="form-control" name="status" value="Menunggu Respon"> -->

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Submit &nbsp;<i class="fa fa-paper-plane"></i> </button>
                            <!-- <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button> -->
                            <button type="reset" class="btn btn-warning btn btn-primary btn-sm">Reset&nbsp;<i class="fa fa-times"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include 'template/footer.php'; ?>